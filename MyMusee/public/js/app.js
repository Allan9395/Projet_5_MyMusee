class Index {

    constructor() {
        this.urlMuseumsData = "https://data.culture.gouv.fr/api/records/1.0/search/?dataset=musees-de-france-base-museofile&rows=1216&facet=dompal&facet=region"
        this.latlng = L.latLng(-37.82, 175.24);
        this.title = this.museumsName
        this.map = L.map('mapid', {center: this.latlng, zoom: 13, layers: this.markers}).setView([48.860294, 2.338629], 6)
        /*this.map = L.map('mapid', {
            center: this.latlng,
            zoom: 13,
        }).setView([48.860294, 2.338629], 6)*/

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

            this.museumsTab.records.forEach(museums => {
                this.museumsName = museums.fields.nomoff
                this.museumsDepartement = museums.fields.dompal
                this.museumsCity = museums.fields.ville_m
                this.museumsGeolocalisation = museums.fields.geolocalisation

                /*if (this.museumsGeolocalisation != undefined) {
                    this.markers = L.markerClusterGroup({
                        disableClusteringAtZoom: 17
                    });
    
                    for (this.i = 0; this.i < this.museumsGeolocalisation; this.i++) {
                        this.markers.addLayer(new L.marker(this.museumsGeolocalisation).bindPopup(this.museumsName))
                        console.log(this.markers)
                    }
                    this.map.addLayer(this.markers)

                }
               
                this.map.addLayer(this.markers);*/
                
                if (this.museumsGeolocalisation != undefined) {
                    this.markers = L.markerClusterGroup({
                        disableClusteringAtZoom: 17
                    })
                    this.markers.addLayer(new L.marker(this.museumsGeolocalisation).bindPopup(this.museumsName))
                }
                //console.log(this.markers)
                this.map.addLayer(this.markers)
            })
        }
        getMuseumsDataJson()
    }
}
const index = new Index()