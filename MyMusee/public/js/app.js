class Index {

    constructor() {
        this.urlMuseumsData = "https://data.culture.gouv.fr/api/records/1.0/search/?dataset=musees-de-france-base-museofile&rows=1216&facet=dompal&facet=region"
        this.title = this.museumsName
        this.map = L.map('mapid').setView([46.50, 2.33], 6)

        this.createMap()
        this.getMuseumsData()

    }
    createMap() {
        //cration du calque image 
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(this.map);
    }

    getMuseumsData() {
        const getMuseumsDataJson = async () => {
            this.response = await fetch(this.urlMuseumsData)
            this.museumsTab = await this.response.json()

            var markers = L.markerClusterGroup();

            this.museumsTab.records.forEach(museums => {
                this.museumsName = museums.fields.nomoff
                this.museumsDepartement = museums.fields.dompal
                this.museumsCity = museums.fields.ville_m
                this.museumsGeolocalisation = museums.fields.geolocalisation

                if (this.museumsGeolocalisation != undefined) {

                    var addressPoints = [this.museumsGeolocalisation]
		
                    for (var i = 0; i < addressPoints.length; i++) {
                        var a = addressPoints[0];
                        var marker = L.marker(new L.LatLng(a[0], a[1]));
                        marker.bindPopup(this.museumsName);
                        markers.addLayer(marker);
                    }
                    
                    this.map.addLayer(markers);
                }

            })
        }
        getMuseumsDataJson()
    }
}
const index = new Index()