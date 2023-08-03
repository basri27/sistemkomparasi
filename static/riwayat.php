<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5"
    />
    <meta name="author" content="AdminKit" />
    <meta
      name="keywords"
      content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <!-- <link rel="shortcut icon" href="img/icons/icon-48x48.png" /> -->

    <link
      rel="canonical"
      href="https://demo-basic.adminkit.io/pages-blank.html"
    />
    <link
      rel="stylesheet"
      href="plugins/data-table/datatables-bs4/css/dataTables.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="plugins/data-table/datatables-responsive/css/responsive.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="plugins/data-table/datatables-buttons/css/buttons.bootstrap4.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Blank Page | AdminKit Demo</title>

    <link href="css/app.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
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

            <li class="sidebar-item">
              <a class="sidebar-link" href="dashboard.php">
                <i class="align-middle" data-feather="home"></i>
                <span class="align-middle">Dashboard</span>
              </a>
            </li>
			<li class="sidebar-item active">
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
                      Riwayat Hasil Pembacaan Sensor
                    </h3>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="example" class="table table-bordered table-striped">
                        <!-- <thead>
                          <tr>
                            <th>Tanggal</th>
                            <th>HC-SR04</th>
                            <th>JSN-SR04T</th>
                            <th>US-100</th>
                          </tr>
                        </thead>
                        <tbody id="allData">
                          
                        </tbody> -->
                      </table>
                    </div>
                  </div>
                </div>
                <p id="test"></p>
              </div>
            </div>
          </div>
        </main>

        <footer class="footer">
          <div class="container-fluid">
            <div class="row text-muted">
              <div class="col-6 text-start">
                <p class="mb-0">
                  <a
                    class="text-muted"
                    href="https://adminkit.io/"
                    target="_blank"
                    ><strong>AdminKit</strong></a
                  >
                  -
                  <a
                    class="text-muted"
                    href="https://adminkit.io/"
                    target="_blank"
                    ><strong>Bootstrap Admin Template</strong></a
                  >
                  &copy;
                </p>
              </div>
              
            </div>
          </div>
        </footer>
      </div>
    </div>

    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/data-table/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/data-table/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/data-table/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/data-table/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/data-table/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/data-table/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/data-table/jszip/jszip.min.js"></script>
    <script src="plugins/data-table/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/data-table/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/data-table/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/data-table/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/data-table/datatables-buttons/js/buttons.colVis.min.js"></script>
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

      var stdList = [];
      const hc = [];
      const jsn = [];
      const us = [];
      const tanggal = [];
      
      function createTables(stdList) {
        $(document).ready(function () {
          var table = $("#example").DataTable({
            lengthChange: false,
            data: stdList,
            columns: [
              { title: "Tanggal/Waktu" },
              { title: "HC-SR04" },
              { title: "JSN-SR04T" },
              { title: "US-100" },
            ],
            buttons: ["copy", "csv", "excel", "pdf", "print"],
          });

          table
          .buttons()
          .container()
          .appendTo("#example_wrapper .col-md-6:eq(0)");
        });
      }

      //UNTUK MENAMPILKAN DATA KE TAMPILAN
      function allData() {
        Promise.all([day1.once('value'), day2.once('value')])
          .then((snapshots) => {
            const hari1 = snapshots[0].val();
            const hari2 = snapshots[1].val();

            // Menggabungkan data dari kedua referensi
            const combinedData = { hari1, hari2 };
            const data = [];
            console.log(combinedData)
            // Menggunakan forEach untuk mengiterasi data gabungan
            Object.keys(combinedData).forEach((key) => {
              data.push(combinedData[key]);
            });
            
            Object.keys(data[0]).forEach((i1) => {
              const d1 = data[0][i1];
              const d1HC = d1['tinggi_air_sungai_HCSR04'];
              const d1JSN = d1['tinggi_air_sungai'];
              const d1US = d1['tinggi_air_sungai_US100'];
              const tglData1 = data[0]['tanggal'];
              
              if(d1HC != null) {
                Object.keys(d1HC).forEach((jam) => {
                  tanggal.push(tgl1 + " | " + jam)
                  hc.push(d1HC[jam] + " cm")
                })
              }
              if(d1JSN != null) {
                Object.keys(d1JSN).forEach((jam) => {
                  jsn.push(d1JSN[jam] + " cm")
                })
              }  
              if(d1US != null) {
                Object.keys(d1US).forEach((jam) => {
                  us.push(d1US[jam] + " cm")
                })
              }    
            });
          
            Object.keys(data[1]).forEach((i2) => {
              const d2 = data[1][i2];
              const d2HC = d2['tinggi_air_sungai_HCSR04'];
              const d2JSN = d2['tinggi_air_sungai'];
              const d2US = d2['tinggi_air_sungai_US100'];
              const tglData2 = data[1]['tanggal'];
              const length = 0;
              
              if(d2HC != null) {
                Object.keys(d2HC).forEach((jam) => {
                  tanggal.push(tgl2 + " | " + jam)
                  hc.push(d2HC[jam] + " cm")
                })
              }
              if(d2JSN != null) {
                Object.keys(d2JSN).forEach((jam) => {
                  jsn.push(d2JSN[jam] + " cm")
                })
              }  
              if(d2US != null) {
                Object.keys(d2US).forEach((jam) => {
                  us.push(d2US[jam] + " cm")
                })
              }         
            });
            tanggal.forEach(function(value, index) {
              addItemToTABLE(value, hc[index], jsn[index], us[index])
            });
            createTables(stdList)
          
            // Menyimpan data gabungan ke referensi baru
            const combinedRef = firebase.database().ref("Log/gabungan");
            return combinedRef.set(combinedData);
          })
          .then(() => {
            console.log('Data berhasil digabungkan.');
          })
          .catch((error) => {
            console.error('Error:', error);
        });
  //       day1.on('value', function (snap) {
  //         snap.forEach(function(e) {
  //           Object.keys(e.val().tinggi_air_sungai_HCSR04).forEach((key) => {
  //             const value = e.val().tinggi_air_sungai_HCSR04[key];
  //             if(e.val().tinggi_air_sungai_HCSR04.hasOwnProperty(key)) {
  //               hc.push(value)
  //               tanggal.push(tgl1 + " | " + key)
  //             }
  //           });
  //           Object.keys(e.val().tinggi_air_sungai).forEach((key) => {
  //             const value = e.val().tinggi_air_sungai[key];
  //             if(e.val().tinggi_air_sungai.hasOwnProperty(key)) {
  //               jsn.push(value)
  //             }
  //           });
  //           Object.keys(e.val().tinggi_air_sungai_US100).forEach((key) => {
  //             const value = e.val().tinggi_air_sungai_US100[key];
  //             if(e.val().tinggi_air_sungai_US100.hasOwnProperty(key)) {
  //               us.push(value)
  //             }
  //           });
  //         });
  //         hc.forEach(function(value, index) {
  //           addItemToTABLE(tanggal[index], value, jsn[index], us[index])
  //         })
  //         createTables(stdList)
  //         console.log(hc)
  //       });

        function addItemToTABLE(tanggal, hc, jsn, us) {
          $(document).ready(function () {
            stdList.push([tanggal, hc, jsn, us])
          });
        } 
      }  
      window.onload = allData;
    </script>
  </body>
</html>
