<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Indeks Kepuasan Masyarakat</title>
		<style>
			.chart-container {
				text-align: center;
			}

			.chart-img {
				max-width: 50%;
				margin: 0 auto;
				display: block;
			}

			table {
				font-size: .8rem;
			}

			table td, table th {
				text-align: left;
			}

			.title {
				text-align: center;
				margin: 20px 0;
			}

			.text-md {
				font-size: 1.1rem;
			}
		</style>
	</head>

	<body>
		<div>
			<table style="border-bottom: 1px solid black; width: 100%; text-align: center;">
				<tr>
					<td style="vertical-align: middle; width: 15%;">
						<img src="{{ public_path('assets/LOGO RSUD.png') }}" alt="Logo" width="80">
					</td>
					<td style="vertical-align: middle; line-height: 1.5;">
						<div style="text-align: center;">
							<h4 style="font-size: 1.2rem; margin: 0;">RSUD Mayjen H.A. Thalib Kota Sungai Penuh</h4>
							<div style="margin: 5px 0;">Sistem Informasi Manajemen Rumah Sakit</div>
							<div>JL. Basuki Rahmat, Kota Sungai Penuh, Jambi, Indonesia</div>
						</div>
					</td>
					<td style="width: 15%;"></td>
				</tr>
			</table>
			<div class="title">
				<span class="text-md">LAPORAN RESPONDEN <br>
					INDEKS KEPUASAN MASYARAKAT RSUD Mayjen H.A. Thalib <br>
					Kota Sungai Penuh
				</span>
			</div>
			<table style="width: 100%;">
				<tr>
					<td>
						<table>
							<tr>
								<th>Tanggal Mulai</th>
								<td>:</td>
								<td>{{ request('start_date') }}</td>
							</tr>
							<tr>
								<th>Tanggal Selesai</th>
								<td>:</td>
								<td>{{ request('end_date') }}</td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<th>Jenis Kelamin</th>
								<td>:</td>
								<td>{{ request('gender') ?? 'Semua' }}</td>
							</tr>
							<tr>
								<th>Umur</th>
								<td>:</td>
								<td>{{ request('age') ?? 'Semua' }}</td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<th>Pendidikan</th>
								<td>:</td>
								<td>{{ request('education') ?? 'Semua' }}</td>
							</tr>
							<tr>
								<th>Pekerjaan</th>
								<td>:</td>
								<td>{{ request('job') ?? 'Semua' }}</td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<th>Kota / Kabupaten</th>
								<td>:</td>
								<td>{{ request('village') ?? 'Semua' }}</td>
							</tr>
							<tr>
								<th>Pencarian</th>
								<td>:</td>
								<td>{{ request('search') }}</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
		<div class="chart-container">
			<h5>Responden Menurut Jenis Kelamin</h5>
			<img src="{{ 'https://quickchart.io/chart?c=' . urlencode($chartJKConfig) }}" alt="Chart" class="chart-img" />
		</div>
		<div class="chart-container">
			<h5>Responden Menurut Umur</h5>
			<img src="{{ 'https://quickchart.io/chart?c=' . urlencode($chartUmurConfig) }}" alt="Chart" class="chart-img" />
		</div>
		<div class="chart-container">
			<h5>Responden Menurut Pendidikan</h5>
			<img src="{{ 'https://quickchart.io/chart?c=' . urlencode($chartPendidikanConfig) }}" alt="Chart" class="chart-img" />
		</div>
		<div class="chart-container">
			<h5>Responden Menurut Pekerjaan</h5>
			<img src="{{ 'https://quickchart.io/chart?c=' . urlencode($chartPekerjaanConfig) }}" alt="Chart" class="chart-img" />
		</div>
		<div class="chart-container">
			<h5>Responden Menurut Kota / Kabupaten</h5>
			<img src="{{ 'https://quickchart.io/chart?c=' . urlencode($chartDesaConfig) }}" alt="Chart" class="chart-img" />
		</div>
		<table style="margin-top: 50px; width: 100%;">
			<tr>
				<td></td>
				<td style="text-align: center; width: 40%;">
					<div>Sungai Penuh, {{ now()->format('d/m/Y') }}</div>
					<div style="margin-bottom: 50px;">Kepala Instalasi</div>
					<div>ARYA VERMASARI, SKM, MARS</div>
					<div>Nip. 19820719 200701 2 002</div>
				</td>
			</tr>
		</table>
	</body>

</html>
