@extends('user.index')

@section('content')
<div>
    <canvas id="chartHafalan" width="400" height="200"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Data dari backend
    const labels = @json(array_column($data, 'tanggal'));
    const dataAyat = @json(array_column($data, 'ayat'));

    // Konfigurasi Chart.js
    const ctx = document.getElementById('chartHafalan').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Statistik Hafalan (Ayat)',
                data: dataAyat,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: true },
                tooltip: { enabled: true }
            },
            scales: {
                x: { title: { display: true, text: 'Tanggal' } },
                y: { title: { display: true, text: 'Jumlah Ayat' }, beginAtZero: true }
            }
        }
    });
</script>

@endsection
