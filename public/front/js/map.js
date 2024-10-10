        // Inisialisasi peta dan set view ke lokasi spesifik (koordinat Jakarta)
        var map = L.map('map').setView([-6.894000, 107.599557], 13);

        // Tambahkan tile layer dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Tambahkan marker ke peta
        var marker = L.marker([-6.894000, 107.599557]).addTo(map)
            .bindPopup("<b>Halo!</b><br />Ini Bandung.").openPopup();

        // Pop-up ketika peta diklik
        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("Kamu mengklik di " + e.latlng.toString())
                .openOn(map);
        }

        map.on('click', onMapClick);