class Index {

    constructor() {
        this.museumName = document.querySelector('#museumName').innerHTML
        this.coordinatesString = document.querySelector('.coordinates').innerHTML
        this.coordinates = this.coordinatesString.split(',')

        this.map = L.map('mapid').setView(this.coordinates, 15)

        this.createMap()
        this.getMarkerMuseumsData()

    }
    createMap() {
        //cration du calque image 
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(this.map);
    }

    getMarkerMuseumsData() {

                if (this.coordinates != undefined) {
                    new L.marker(this.coordinates).addTo(this.map)
                        .bindPopup(this.museumName)
                }
            }
        }
const index = new Index()