@extends('layouts.dashboard', [
'breadcrumbs' => [],
])
@section('title', 'Dasbor')
@section('content')
<div class="my-10 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
	<a href="{{ route('kuesioner.index') }}" class="duration-250 transform cursor-pointer overflow-hidden rounded-lg border bg-white shadow transition hover:scale-100 hover:shadow-lg">
		<div class="flex h-20 items-center justify-between bg-red-400 px-5">
			<p class="text-lg text-white">KUESIONER</p>
			<svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" stroke-linejoin="round" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 7 2 2 4-4m-5-9v4h4V3h-4Z"/>
			</svg>
		</div>
		<div class="mb-2 flex justify-between px-5 pt-6 text-sm text-gray-600">
			<p>TOTAL</p>
		</div>
		<p class="ml-5 py-4 text-3xl">{{ $total->kuesioner }}</p>
	</a>

	<a href="{{ route('responden.index') }}" class="duration-250 transform cursor-pointer overflow-hidden rounded-lg border bg-white shadow transition hover:scale-100 hover:shadow-lg">
		<div class="flex h-20 items-center justify-between bg-blue-500 px-5">
			<p class="text-lg text-white">JAWABAN</p>
			<svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" stroke-linejoin="round" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z"/>
			</svg>
		</div>
		<div class="mb-2 flex justify-between px-5 pt-6 text-sm text-gray-600">
			<p>TOTAL</p>
		</div>
		<p class="ml-5 py-4 text-3xl">{{ $total->answer }}</p>
	</a>

	<a href="{{ route('responden.index') }}" class="duration-250 transform cursor-pointer overflow-hidden rounded-lg border bg-white shadow transition hover:scale-100 hover:shadow-lg">
		<div class="flex h-20 items-center justify-between bg-purple-400 px-5">
			<p class="text-lg text-white">RESPONDEN</p>
			<svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
			</svg>
		</div>
		<div class="mb-2 flex justify-between px-5 pt-6 text-sm text-gray-600">
			<p>TOTAL</p>
		</div>
		<p class="ml-5 py-4 text-3xl">{{ $total->responden }}</p>
	</a>

	<a href="{{ route('feedback.index') }}" class="duration-250 transform cursor-pointer overflow-hidden rounded-lg border bg-white shadow transition hover:scale-100 hover:shadow-lg">
		<div class="flex h-20 items-center justify-between bg-purple-900 px-5">
			<p class="text-lg text-white">KRITIK & SARAN</p>
			<svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
			</svg>
		</div>
		<div class="mb-2 flex justify-between px-5 pt-6 text-sm text-gray-600">
			<p>TOTAL</p>
		</div>
		<p class="ml-5 py-4 text-3xl">{{ $total->feedback }}</p>
	</a>
</div>


<div class="mb-5 grid grid-cols-1 gap-5 lg:grid-cols-3">
	<div class="rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
		<div class="mb-3 flex justify-between">
			<div class="flex items-center justify-center">
				<h5 class="pr-1 text-xl font-bold leading-none text-gray-900 dark:text-white">Berdasarkan Jawaban</h5>
			</div>
		</div>
		<div class="py-6" id="grafik-berdasarkan-jawaban"></div>
	</div>
	<div class="col-span-2 rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
		<div class="mb-3 flex justify-between">
			<div class="flex items-center justify-center">
				<h5 class="pr-1 text-xl font-bold leading-none text-gray-900 dark:text-white">Grafik Jawaban Kuesioner Harian</h5>
			</div>
		</div>
		<div id="grafik-jawaban-harian"></div>
	</div>
</div>
<div class="mb-5 grid grid-cols-1 gap-5 lg:grid-cols-3">
	<div class="rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
		<div class="mb-3 flex justify-between">
			<div class="flex items-center justify-center">
				<h5 class="pr-1 text-xl font-bold leading-none text-gray-900 dark:text-white">Grafik Responden Berdasarkan Jenis Kelamin</h5>
			</div>
		</div>
		<div class="py-6" id="grafik-berdasarkan-jenis-kelamin"></div>
	</div>
	<div class="rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
		<div class="mb-3 flex justify-between">
			<div class="flex items-center justify-center">
				<h5 class="pr-1 text-xl font-bold leading-none text-gray-900 dark:text-white">Grafik Responden Berdasarkan Umur</h5>
			</div>
		</div>
		<div class="py-6" id="grafik-berdasarkan-umur"></div>
	</div>
	<div class="rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
		<div class="mb-3 flex justify-between">
			<div class="flex items-center justify-center">
				<h5 class="pr-1 text-xl font-bold leading-none text-gray-900 dark:text-white">Grafik Responden Berdasarkan Pendidikan</h5>
			</div>
		</div>
		<div class="py-6" id="grafik-berdasarkan-pendidikan"></div>
	</div>
</div>
<div class="mb-5 grid grid-cols-1 gap-5 lg:grid-cols-3">
	<div class="rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
		<div class="mb-3 flex justify-between">
			<div class="flex items-center justify-center">
				<h5 class="pr-1 text-xl font-bold leading-none text-gray-900 dark:text-white">Grafik Responden Berdasarkan Pekerjaan</h5>
			</div>
		</div>
		<div class="py-6" id="grafik-berdasarkan-pekerjaan"></div>
	</div>
	<div class="col-span-2 rounded-lg border bg-white p-4 shadow dark:bg-gray-800 md:p-6">
		<div class="mb-3 flex justify-between">
			<div class="flex items-center justify-center">
				<h5 class="pr-1 text-xl font-bold leading-none text-gray-900 dark:text-white">Grafik Responden Berdasarkan Kota / Kabupaten</h5>
			</div>
		</div>
		<div class="py-6" id="grafik-berdasarkan-desa"></div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
		// ApexCharts options and config
	window.addEventListener("load", function() {
		const answers = @json($answers);
		const percentages = answers.details.map((e) => parseFloat(e.percentage.toFixed(2)))
		const labels = answers.details.map((e) => e.label)

		const getChartOptions = () => {
			return {
				series: percentages,
				colors: ["#F63326", "#F07F00", "#ECBD00", "#4CD440"],
				chart: {
					height: 320,
					width: "100%",
					type: "donut",
				},
				stroke: {
					colors: ["transparent"],
					lineCap: "",
				},
				plotOptions: {
					pie: {
						donut: {
							labels: {
								show: true,
								name: {
									show: true,
									fontFamily: "Inter, sans-serif",
									offsetY: 20,
								},
								total: {
									showAlways: true,
									show: true,
									label: "Jawaban",
									fontFamily: "Inter, sans-serif",
									formatter: function(w) {
										return `${answers.total}`
									},
								},
								value: {
									show: true,
									fontFamily: "Inter, sans-serif",
									offsetY: -20,
									formatter: function(value) {
										return value + "%"
									},
								},
							},
							size: "80%",
						},
					},
				},
				grid: {
					padding: {
						top: -2,
					},
				},
				labels: labels,
				dataLabels: {
					enabled: false,
				},
				legend: {
					position: "bottom",
					fontFamily: "Inter, sans-serif",
				},
				yaxis: {
					labels: {
						formatter: function(value) {
							return value + "%"
						},
					},
				},
				xaxis: {
					labels: {
						formatter: function(value) {
							return value + "%"
						},
					},
					axisTicks: {
						show: false,
					},
					axisBorder: {
						show: false,
					},
				},
			}
		}

		if (document.getElementById("grafik-berdasarkan-jawaban") && typeof ApexCharts !== 'undefined') {
			const chart = new ApexCharts(document.getElementById("grafik-berdasarkan-jawaban"), getChartOptions());
			chart.render();
		}
	});
</script>
<script>
		// ApexCharts options and config
	window.addEventListener("load", function() {
		const answers = @json($answers);
		const colors = ["#F63326", "#F07F00", "#ECBD00", "#4CD440"]
		let series = []
		let data = []


		answers.details.forEach((detail, key) => {
			series.push({
				name: detail.label,
				color: colors[key],
				data: []
			})
		});

		for (e in answers.daily) {
			answers.daily[e].map((element) => series[element.label].data.push({
				x: e,
				y: element.total
			}))
		}

		const options = {
			colors,
			series,
			chart: {
				type: "bar",
				height: "320px",
				fontFamily: "Inter, sans-serif",
				toolbar: {
					show: false,
				},
			},
			plotOptions: {
				bar: {
					horizontal: false,
					columnWidth: "70%",
					borderRadiusApplication: "end",
					borderRadius: 8,
				},
			},
			tooltip: {
				shared: true,
				intersect: false,
				style: {
					fontFamily: "Inter, sans-serif",
				},
			},
			states: {
				hover: {
					filter: {
						type: "darken",
						value: 1,
					},
				},
			},
			stroke: {
				show: true,
				width: 0,
				colors: ["transparent"],
			},
			grid: {
				show: false,
				strokeDashArray: 4,
				padding: {
					left: 2,
					right: 2,
					top: -14
				},
			},
			dataLabels: {
				enabled: false,
			},
			legend: {
				show: false,
			},
			xaxis: {
				floating: false,
				labels: {
					show: true,
					style: {
						fontFamily: "Inter, sans-serif",
						cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
					}
				},
				axisBorder: {
					show: false,
				},
				axisTicks: {
					show: false,
				},
			},
			yaxis: {
				show: false,
			},
			fill: {
				opacity: 1,
			},
		}

		if (document.getElementById("grafik-jawaban-harian") && typeof ApexCharts !== 'undefined') {
			const chart = new ApexCharts(document.getElementById("grafik-jawaban-harian"), options);
			chart.render();
		}
	});
</script>
<script>
	window.addEventListener("load", function() {
		const getChartOptions = (series, labels, total, colors) => {
			return {
				series,
				labels,
				colors,
				chart: {
					height: 320,
					width: "100%",
					type: "donut",
				},
				stroke: {
					colors: ["transparent"],
					lineCap: "",
				},
				plotOptions: {
					pie: {
						donut: {
							labels: {
								show: true,
								name: {
									show: true,
									fontFamily: "Inter, sans-serif",
									offsetY: 20,
								},
								total: {
									showAlways: true,
									show: true,
									label: "Responden",
									fontFamily: "Inter, sans-serif",
									formatter: function(w) {
										return `${total}`
									},
								},
								value: {
									show: true,
									fontFamily: "Inter, sans-serif",
									offsetY: -20,
									formatter: function(value) {
										return value + "%"
									},
								},
							},
							size: "80%",
						},
					},
				},
				grid: {
					padding: {
						top: -2,
					},
				},
				dataLabels: {
					enabled: false,
				},
				legend: {
					position: "bottom",
					fontFamily: "Inter, sans-serif",
				},
				yaxis: {
					labels: {
						formatter: function(value) {
							return value + "%"
						},
					},
				},
				xaxis: {
					labels: {
						formatter: function(value) {
							return value + "%"
						},
					},
					axisTicks: {
						show: false,
					},
					axisBorder: {
						show: false,
					},
				},
			}
		}

		const dataGrafikJenisKelamin = @json($dataGrafikJenisKelamin);
		if (document.getElementById("grafik-berdasarkan-jenis-kelamin") && typeof ApexCharts !== 'undefined') {
			const chart = new ApexCharts(document.getElementById("grafik-berdasarkan-jenis-kelamin"), getChartOptions(dataGrafikJenisKelamin.series, dataGrafikJenisKelamin.labels, dataGrafikJenisKelamin.total, dataGrafikJenisKelamin.colors));
			chart.render();
		}

		const dataGrafikUmur = @json($dataGrafikUmur);
		if (document.getElementById("grafik-berdasarkan-umur") && typeof ApexCharts !== 'undefined') {
			const chart = new ApexCharts(document.getElementById("grafik-berdasarkan-umur"), getChartOptions(dataGrafikUmur.series, dataGrafikUmur.labels, dataGrafikUmur.total, dataGrafikUmur.colors));
			chart.render();
		}

		const dataGrafikPendidikan = @json($dataGrafikPendidikan);
		if (document.getElementById("grafik-berdasarkan-pendidikan") && typeof ApexCharts !== 'undefined') {
			const chart = new ApexCharts(document.getElementById("grafik-berdasarkan-pendidikan"), getChartOptions(dataGrafikPendidikan.series, dataGrafikPendidikan.labels, dataGrafikPendidikan.total, dataGrafikPendidikan.colors));
			chart.render();
		}

		const dataGrafikPekerjaan = @json($dataGrafikPekerjaan);
		if (document.getElementById("grafik-berdasarkan-pekerjaan") && typeof ApexCharts !== 'undefined') {
			const chart = new ApexCharts(document.getElementById("grafik-berdasarkan-pekerjaan"), getChartOptions(dataGrafikPekerjaan.series, dataGrafikPekerjaan.labels, dataGrafikPekerjaan.total, dataGrafikPekerjaan.colors));
			chart.render();
		}

		const dataGrafikDesa = @json($dataGrafikDesa);
		if (document.getElementById("grafik-berdasarkan-desa") && typeof ApexCharts !== 'undefined') {
			const chart = new ApexCharts(document.getElementById("grafik-berdasarkan-desa"), getChartOptions(dataGrafikDesa.series, dataGrafikDesa.labels, dataGrafikDesa.total, dataGrafikDesa.colors));
			chart.render();
		}
	});
</script>
@endsection
