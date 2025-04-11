@extends('layouts.admin')

@section('content')
    @php
        use App\Models\User;
        use App\Models\Berita;
        use App\Models\Message;
        use Carbon\Carbon;

        $pesanTerbaru = Message::latest()->take(5)->get();
        $jumlahUser = User::count();
        $jumlahBerita = Berita::count();
        $jumlahPesan = Message::count();
        $tanggalSekarang = Carbon::now('Asia/Jakarta')->isoFormat('dddd, D MMMM YYYY');
    @endphp

    <h6 class="mb-0 text-uppercase">DashBoard</h6>
    <div class="container mt-4">
        <div class="row g-4">
            <!-- Jumlah User -->
            <div class="col-md-4">
                <div class="card shadow rounded-4 border-0 text-center p-4">
                    <i class="bi bi-people-fill fs-2 text-primary mb-2"></i>
                    <h6 class="text-muted">Jumlah User</h6>
                    <h4 class="fw-bold">{{ $jumlahUser }}</h4>
                </div>
            </div>

            <!-- Jumlah Berita -->
            <div class="col-md-4">
                <div class="card shadow rounded-4 border-0 text-center p-4">
                    <i class="bi bi-newspaper fs-2 text-success mb-2"></i>
                    <h6 class="text-muted">Jumlah Berita</h6>
                    <h4 class="fw-bold">{{ $jumlahBerita }}</h4>
                </div>
            </div>

            <!-- Jumlah Pesan -->
            <div class="col-md-4">
                <div class="card shadow rounded-4 border-0 text-center p-4">
                    <i class="bi bi-envelope-fill fs-2 text-danger mb-2"></i>
                    <h6 class="text-muted">Jumlah Pesan</h6>
                    <h4 class="fw-bold">{{ $jumlahPesan }}</h4>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <!-- Jam Real-Time dan Kalender -->
            <div class="col-md-6">
                <!-- Jam Real-Time -->
                <div class="card shadow rounded-4 border-0 p-4 mb-4">
                    <h5 class="mb-3">
                        <i class="bi bi-clock-fill me-2 text-primary"></i>
                        Jam Real-Time
                    </h5>
                    <div id="jam" class="fs-3 text-center"></div>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Kalender -->
                <div class="card shadow rounded-4 border-0 p-4 mb-4">
                    <h5 class="mb-3">
                        <i class="bi bi-calendar-fill me-2 text-primary"></i>
                        Kalender
                    </h5>
                    <div id="calendar" class="text-center"></div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-12">
                <div class="card shadow rounded-4 border-0 p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">
                            <i class="bi bi-envelope-paper-fill me-2 text-primary"></i>
                            Pesan Masuk Terbaru
                        </h5>
                        <a href="{{ route('message.index') }}" class="btn btn-outline-primary btn-sm">Lihat Semua</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        @forelse($pesanTerbaru as $pesan)
                            <li class="list-group-item px-0 d-flex justify-content-between align-items-center"
                                style="border-bottom: 1px solid #e0e0e0;">
                                <div>
                                    <strong>{{ $pesan->name }}</strong>
                                    <small class="text-muted">{{ $pesan->email }}</small>
                                </div>
                                <div class="text-end text-muted" style="max-width: 50%;">
                                    {{ \Illuminate\Support\Str::limit($pesan->message, 60) }}
                                </div>
                            </li>
                        @empty
                            <li class="list-group-item px-0 text-muted">Belum ada pesan masuk.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript untuk Jam Real-Time -->
    <script>
        function updateClock() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            document.getElementById('jam').textContent = `${hours}:${minutes}:${seconds}`;
        }

        setInterval(updateClock, 1000);
        updateClock(); // Call once to display time immediately
    </script>

    <!-- JavaScript untuk Kalender -->
    <script>
        function generateCalendar() {
            const date = new Date();
            const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                "Oktober", "November", "Desember"
            ];
            const dayNames = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

            const currentMonth = date.getMonth();
            const currentYear = date.getFullYear();
            const currentDay = date.getDate(); // Tanggal hari ini

            const firstDay = new Date(currentYear, currentMonth, 1);
            const lastDay = new Date(currentYear, currentMonth + 1, 0);

            const daysInMonth = lastDay.getDate();
            const firstDayOfWeek = firstDay.getDay();

            let calendarHTML = `<h3>${monthNames[currentMonth]} ${currentYear}</h3>`;
            calendarHTML += '<table class="table table-bordered"><thead><tr>';

            for (let i = 0; i < dayNames.length; i++) {
                calendarHTML += `<th>${dayNames[i]}</th>`;
            }
            calendarHTML += '</tr></thead><tbody><tr>';

            for (let i = 0; i < firstDayOfWeek; i++) {
                calendarHTML += '<td></td>';
            }

            for (let day = 1; day <= daysInMonth; day++) {
                const isToday = day === currentDay; // Memeriksa apakah ini hari ini
                const className = isToday ? 'bg-primary text-white' : ''; // Menambahkan kelas untuk penanda

                if ((firstDayOfWeek + day - 1) % 7 === 0 && day !== 1) {
                    calendarHTML += '</tr><tr>';
                }

                // Menandai hari ini dengan kelas tertentu
                calendarHTML += `<td class="${className}">${day}</td>`;
            }

            calendarHTML += '</tr></tbody></table>';

            document.getElementById('calendar').innerHTML = calendarHTML;
        }

        generateCalendar(); // Generate the calendar when the page loads
    </script>

    <style>
        /* Penanda tanggal hari ini */
        .today {
            background-color: #007bff !important;
            color: white;
            border-radius: 50%;
            text-align: center;
            font-weight: bold;
            width: 30px;
            height: 30px;
            line-height: 30px;
            margin: 0 auto;
        }
    </style>



    <!-- Bootstrap Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
@endsection
