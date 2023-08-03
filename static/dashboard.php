
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5"/>
    <meta name="author" content="AdminKit" />
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"/>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <!-- <link rel="shortcut icon" href="img/icons/icon-48x48.png" /> -->

    <link
      rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html"/>

    <title>Blank Page | AdminKit Demo</title>

    <link href="css/app.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap"
      rel="stylesheet"/>
  </head>

  <body>
    <div class="wrapper">
      <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
          <a class="sidebar-brand" href="dashboard.php">
            <span class="align-middle">AdminKit</span>
          </a>

          <ul class="sidebar-nav">
            <li class="sidebar-header">Menu</li>

            <li class="sidebar-item active">
              <a class="sidebar-link" href="dashboard.php">
                <i class="align-middle" data-feather="home"></i>
                <span class="align-middle">Dashboard</span>
              </a>
            </li>
			      <li class="sidebar-item">
              <a class="sidebar-link" href="riwayat.php">
                <i class="align-middle" data-feather="database"></i>
                <span class="align-middle">Riwayat</span>
              </a>
            </li>
        </div>
      </nav>

      <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg bg-warning">
          <a class="sidebar-toggle js-sidebar-toggle">
            <i class="hamburger align-self-center"></i>
          </a>

          <div class="navbar-collapse collapse">
            <ul class="navbar-nav float-left">
              <li class="float-left">
                <h4>
                  <b>
                    KOMPARASI SENSOR ULTRASONIK DALAM MENGUKUR KETINGGIAN AIR
                    SUNGAI BERBASIS INTERNET OF THINGS
                  </b>
                </h4>
              </li>
            </ul>
          </div>
        </nav>

        <main class="content">
          <div class="container-fluid p-0">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title mb-0 text-center text-dark">
                      Tingkat Akurasi Sensor
                    </h3>
                  </div>
                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-6 bg-primary mb-1 border border-light">
                          <h3 class="card-title mb-0 text-center pt-4 pb-4 text-light">
                            Dengan Penampang Gabus
                          </h3>
                          <div class="row">
                            <div class="table-responsive">                        
                              <table class="table table-borderless">
                                <tr style="color: yellow;" class="text-center">
                                  <th class="border border-light border-bottom-0">HC-SR04</th>
                                  <th class="border border-light border-bottom-0">JSN-SR04T</th>
                                  <th class="border border-light border-bottom-0">US-100</th>
                                </tr>
                                <tr style="color: yellow;" class="text-center">
                                  <th id="hc2" class="border border-light border-top-0"></th>
                                  <th id="jsn2" class="border border-light border-top-0"></th>
                                  <th id="us2" class="border border-light border-top-0"></th>
                                </tr>
                              </table>                              
                            </div>
                          </div>                          
                        </div>
                        <div class="col-md-6 bg-primary mb-1 border border-light">
                          <h3 class="card-title mb-0 text-center pt-4 pb-4 text-light">
                            Tanpa Penampang Gabus
                          </h3>
                          <div class="row">
                            <div class="table-responsive">                        
                              <table class="table table-borderless">
                                <tr style="color: yellow;" class="text-center">
                                  <th class="border border-light border-bottom-0">HC-SR04</th>
                                  <th class="border border-light border-bottom-0">JSN-SR04T</th>
                                  <th class="border border-light border-bottom-0">US-100</th>
                                </tr>
                                <tr style="color: yellow;" class="text-center">
                                  <th id="hc1" class="border border-light border-top-0"></th>
                                  <th id="jsn1" class="border border-light border-top-0"></th>
                                  <th id="us1" class="border border-light border-top-0"></th>
                                </tr>
                              </table>                              
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div id="t"></div>
                      </div>
                      <div class="col-md-6">
                        <div id="s"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

        <footer class="footer">
          <div class="container-fluid">
            <div class="row text-muted">
              <div class="col-6 text-start">
                <p class="mb-0">
                  <a class="text-muted" href="https://adminkit.io/" target="_blank" ><strong>AdminKit</strong></a>
                  -
                  <a class="text-muted" href="https://adminkit.io/" target="_blank" ><strong>Bootstrap Admin Template</strong></a>
                  &copy;
                </p>
              </div>
              <div class="col-6 text-end">
                <ul class="list-inline">
                  <!-- <li class="list-inline-item">
                    <a
                      class="text-muted"
                      href="https://adminkit.io/"
                      target="_blank"
                      >Support</a
                    >
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/app.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- Firebase !-->
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.8.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.8.1/firebase-database.js"></script>
    <script type="module">
      

      // Function Firebase
      // Import the functions you need from the SDKs you need
      import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-app.js";
      import { getDatabase, ref, onValue } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-database.js";
      import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-analytics.js";

      // Your web app's Firebase configuration
      // For Firebase JS SDK v7.20.0 and later, measurementId is optional
      const firebaseConfig = {
        apiKey: "AIzaSyCjPtL9Ug9Y2suZhKEX7qwKHGxZ3EFYPIY",
        authDomain: "risetulm-8a989.firebaseapp.com",
        databaseURL: "https://risetulm-8a989-default-rtdb.asia-southeast1.firebasedatabase.app",
        projectId: "risetulm-8a989",
        storageBucket: "risetulm-8a989.appspot.com",
        messagingSenderId: "201683381421",
        appId: "1:201683381421:web:3a21f255ecc6156624ea24",
        measurementId: "G-R36SSC4449",
      };

      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);
      
      // // Make auth and database references
      const auth = firebase.auth();
      const location = firebase.database().ref("Log/lokasi_1");
      const day1 = firebase.database().ref("Log/lokasi_1/2023-06-21")
      const day2 = firebase.database().ref("Log/lokasi_1/2023-06-22")
      var tgl1 = "2023-06-21"
      var tgl2 = "2023-06-22"

      const hc1 = [];
      const jsn1 = [];
      const us1 = [];
      const hc2 = [];
      const jsn2 = [];
      const us2 = [];
      const jam1 = [];
      const jam2 = [];
      const aktual1 = [];
      const filterWaktu1 = []
      // const aktual1 = [35.6, 37.9, 41.2, 45.7, 48.1, 52.4, 56.8, 59.2, 60.7, 62.4, 58.5, 57.3, 55.9, 55.7, 54.2, 51.4 ];
      // const filterWaktu2 = ['10:04', '10:34', '11:04', '11:34', '12:04', '12:34', '13:04', '13:37', '14:02', '14:30', '15:00', '15:30', '16:01', '16:31', '17:01', '17:31']
      const aktual2 = []
      const filterWaktu2 = []
      const allWaktuHC1 = [];
      const allWaktuJSN1 = [];
      const allWaktuUS1 = [];
      const allWaktuHC2 = [];
      const allWaktuJSN2 = [];
      const allWaktuUS2 = [];
      const errorHC1 = []
      const errorJSN1 = []
      const errorUS1 = []
      let finalErrorHC1 = 0;
      let finalErrorJSN1 = 0;
      let finalErrorUS1 = 0;
      const errorHC2 = []
      const errorJSN2 = []
      const errorUS2 = []
      let finalErrorHC2 = 0;
      let finalErrorJSN2 = 0;
      let finalErrorUS2 = 0;

      function getDataAktual() {
        fetch('getDataAktual.php').then(response => response.json()).then(data => {
          console.log(data);
          data.forEach(aktual => {
            if(aktual.tgl === tgl1) {
              aktual1.push(aktual.tinggi_air)
              filterWaktu1.push(getJamMenit(aktual.waktu))
            }
            else if(aktual.tgl === tgl2) {
              aktual2.push(aktual.tinggi_air)
              filterWaktu2.push(getJamMenit(aktual.waktu))
            }
          });
        });
      }

      window.onload = allData;
      
      //UNTUK MENAMPILKAN DATA KE TAMPILAN
      function allData() {
        getDataAktual()
        day1.on('value', function (snap) {
          snap.forEach(function(e) {
            const dataHC = e.val().tinggi_air_sungai_HCSR04;
            const dataJSN = e.val().tinggi_air_sungai;
            const dataUS = e.val().tinggi_air_sungai_US100;
            Object.keys(dataHC).forEach((key) => {
              const value = dataHC[key];
              const hasilWaktu = getJamMenit(key);
              const dataAkurasi = { [hasilWaktu]: value };
              Object.keys(dataAkurasi).forEach((v) => {
                for (let index = 0; index < filterWaktu1.length; index++) {
                  if(filterWaktu1[index] === v) {
                    const errorResult = errorValue(dataAkurasi[v], aktual1[index]);
                    const finalResult = parseFloat(absoluteValue(errorResult))
                    errorHC1.push(finalResult)
                  }
                }
              })
              if(dataHC.hasOwnProperty(key)) {
                hc1.push(parseFloat(value))
                jam1.push(key)
              }
            });
            Object.keys(dataJSN).forEach((key) => {
              const value = dataJSN[key];
              const hasilWaktu = getJamMenit(key);
              const dataAkurasi = { [hasilWaktu]: value };
              Object.keys(dataAkurasi).forEach((v) => {
                for (let index = 0; index < filterWaktu1.length; index++) {
                  if(filterWaktu1[index] === v) {
                    const errorResult = errorValue(dataAkurasi[v], aktual1[index]);
                    const finalResult = parseFloat(absoluteValue(errorResult))
                    errorJSN1.push(finalResult)
                  }
                }
              })
              if(dataJSN.hasOwnProperty(key)) {
                jsn1.push(parseFloat(value))
              }
            });
            Object.keys(dataUS).forEach((key) => {
              const value = dataUS[key];
              const hasilWaktu = getJamMenit(key);
              const dataAkurasi = { [hasilWaktu]: value };
              Object.keys(dataAkurasi).forEach((v) => {
                for (let index = 0; index < filterWaktu1.length; index++) {
                  if(filterWaktu1[index] === v) {
                    const errorResult = errorValue(dataAkurasi[v], aktual1[index]);
                    const finalResult = parseFloat(absoluteValue(errorResult))
                    errorUS1.push(finalResult)
                  }
                }
              })
              if(dataUS.hasOwnProperty(key)) {
                us1.push(parseFloat(value))
              }
            });
          });
          
          var akurasiHC1 = document.getElementById('hc1')
          finalErrorHC1 = 100 - avrValue(errorHC1)
          akurasiHC1.innerHTML = finalErrorHC1 + "%"
          
          var akurasiJSN1 = document.getElementById('jsn1')
          finalErrorJSN1 = 100 - avrValue(errorJSN1)
          akurasiJSN1.innerHTML = finalErrorJSN1 + "%"
          
          var akurasiUS1 = document.getElementById('us1')
          finalErrorUS1 = 100 - avrValue(errorUS1)
          akurasiUS1.innerHTML = finalErrorUS1 + "%"

          grafik1(hc1, jsn1, us1, jam1)

        });

        day2.on('value', function (snap) {
          snap.forEach(function(e) {
            const dataHC = e.val().tinggi_air_sungai_HCSR04;
            const dataJSN = e.val().tinggi_air_sungai;
            const dataUS = e.val().tinggi_air_sungai_US100;

            Object.keys(dataHC).forEach((key) => {
              const value = dataHC[key];
              const hasilWaktu = getJamMenit(key);
              const dataAkurasi = { [hasilWaktu]: value };
              Object.keys(dataAkurasi).forEach((v) => {
                for (let index = 0; index < filterWaktu2.length; index++) {
                  if(filterWaktu2[index] === v) {
                    const errorResult = errorValue(dataAkurasi[v], aktual2[index]);
                    const finalResult = parseFloat(absoluteValue(errorResult))
                    errorHC2.push(finalResult)
                  }
                }
              })
              if(dataHC.hasOwnProperty(key)) {
                hc2.push(parseFloat(value))
                jam2.push(key)
              }
            });
            Object.keys(dataJSN).forEach((key) => {
              const value = dataJSN[key];
              const hasilWaktu = getJamMenit(key);
              const dataAkurasi = { [hasilWaktu]: value };
              Object.keys(dataAkurasi).forEach((v) => {
                for (let index = 0; index < filterWaktu2.length; index++) {
                  if(filterWaktu2[index] === v) {
                    const errorResult = errorValue(dataAkurasi[v], aktual2[index]);
                    const finalResult = parseFloat(absoluteValue(errorResult))
                    errorJSN2.push(finalResult)
                  }
                }
              })
              if(dataJSN.hasOwnProperty(key)) {
                jsn2.push(parseFloat(value))
              }
            });
            Object.keys(dataUS).forEach((key) => {
              const value = dataUS[key];
              const hasilWaktu = getJamMenit(key);
              const dataAkurasi = { [hasilWaktu]: value };
              Object.keys(dataAkurasi).forEach((v) => {
                for (let index = 0; index < filterWaktu2.length; index++) {
                  if(filterWaktu2[index] === v) {
                    const errorResult = errorValue(dataAkurasi[v], aktual2[index]);
                    const finalResult = parseFloat(absoluteValue(errorResult))
                    errorUS2.push(finalResult)
                  }
                }
              })
              if(dataUS.hasOwnProperty(key)) {
                us2.push(parseFloat(value))
              }
            });
          });
          var akurasiHC2 = document.getElementById('hc2')
          finalErrorHC2 = 100 - avrValue(errorHC2)
          akurasiHC2.innerHTML = finalErrorHC2 + "%"
          
          var akurasiJSN2 = document.getElementById('jsn2')
          finalErrorJSN2 = 100 - avrValue(errorJSN2)
          akurasiJSN2.innerHTML = finalErrorJSN2 + "%"
          
          var akurasiUS2 = document.getElementById('us2')
          finalErrorUS2 = 100 - avrValue(errorUS2)
          akurasiUS2.innerHTML = finalErrorUS2 + "%"

          grafik2(hc2, jsn2, us2, jam2)
        });
      }

      function grafik1(hc, jsn, us, jam) {
        Highcharts.chart('t', {
          chart: {
            type: 'spline'
          },
          title: {
            text: 'Grafik Tinggi Air Tanpa Penampang Gabus'
          },
          xAxis: {
            title: {
              text: 'Waktu'
            },
            categories: jam,
          },
          yAxis: {
            title: {
              text: 'Tinggi Air Sungai (cm)'
            },
            labels: {
              format: '{value}'
            }
          },
          tooltip: {
            crosshairs: true,
            shared: true
          },
          plotOptions: {
            spline: {
              marker: {
                radius: 4,
                lineColor: '#666666',
                lineWidth: 1
              }
            }
          },
          series: [{
            name: 'HC-SR04',
            marker: {
              symbol: 'square'
            },
            data: hc
            }, {
            name: 'JSN-SR04T',
            marker: {
              symbol: 'diamond'
            },
            data: jsn
            }, {
            name: 'US-100',
            marker: {
              symbol: 'round'
            },
            data: us
            }]
        });
      }

      function grafik2(hc, jsn, us, jam) {
        Highcharts.chart('s', {
          chart: {
            type: 'spline'
          },
          title: {
            text: 'Grafik Tinggi Air Dengan Penampang Gabus'
          },
          xAxis: {
            title: {
              text: 'Waktu'
            },
            categories: jam,
          },
          yAxis: {
            title: {
              text: 'Tinggi Air Sungai (cm)'
            },
            labels: {
              format: '{value}'
            }
          },
          tooltip: {
            crosshairs: true,
            shared: true
          },
          plotOptions: {
            spline: {
              marker: {
                radius: 4,
                lineColor: '#666666',
                lineWidth: 1
              }
            }
          },
          series: [{
            name: 'HC-SR04',
            marker: {
              symbol: 'square'
            },
            data: hc
            }, {
            name: 'JSN-SR04T',
            marker: {
              symbol: 'diamond'
            },
            data: jsn
            }, {
            name: 'US-100',
            marker: {
              symbol: 'round'
            },
            data: us
            }]
        });
      }

      // Fungsi untuk mengambil jam dan menit dari string waktu
      function getJamMenit(waktu) {
        const timeArray = waktu.split(":");
        var jam = parseInt(timeArray[0], 10);
        var menit = parseInt(timeArray[1], 10);
        if(jam <= 9) {
          jam = "0" + jam
        }
        if(menit <= 9) {
          menit = "0" + menit
        }
        const hasil = jam + ":" + menit
        return hasil;
      }

      //Fungsi untuk menghitung nilai error
      function errorValue(sensor, meteran) {
        const floatValue = parseFloat(sensor);
        var error = (floatValue-meteran)/meteran*100;
        const errorResult = error.toFixed(2);
        return errorResult;
      }

      function avrValue(numbers) {
        // Menghitung jumlah elemen dalam array
        const count = numbers.length;

        // Menghitung total nilai dari array
        const total = numbers.reduce((acc, curr) => acc + curr, 0);

        // Menghitung nilai rata-rata
        const average = total / count;

        return average.toFixed(2);
        // return count
      }

      function absoluteValue(x) {
        if (x >= 0) {
          return x;
        } else {
          return -x;
        }
      }
    </script>
  </body>
</html>
