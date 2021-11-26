<!doctype html>
<html lang="en">
  <head>
    <title>Grupo1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
   <nav class="navbar navbar-expand navbar-light bg-light">
       <div class="nav navbar-nav">
           <a class="nav-item nav-link active" href="#">Grupo1 <span class="visually-hidden">(current)</span></a>
           <a class="nav-item nav-link" href="?controlador=paginas&accion=inicio">Home</a>
           <a class="nav-item nav-link" href="?controlador=clientes&accion=inicio">Clientes</a>
           <a class="nav-item nav-link" href="?controlador=historico&accion=inicio">Historico</a>
           <a class="nav-item nav-link" href="?controlador=graficos&accion=inicio">Graficos</a>
       </div>
   </nav>   
  <div class="container">
      <div class="row">
          <div class="col-12">
              <?php  include_once("ruteador.php"); ?>
          </div>
          
      </div>
  </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script>
    //$(document).ready(function(){
    //    setInterval(function(){
    //    $("#screen").load('./vistas/historico/inicio.php')
    //    }, 2000);
    //});


    </script>  
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.esm.min.js" integrity="sha512-jZzg6pScDaxwQMIYigQwhPoykbqFDJ2HgeXkeMAQtKKEUbjAYZvtlSyTZdovoqKFbDG58S60zUdLlQDW6pwF7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/helpers.esm.min.js" integrity="sha512-1b6IKdJzKvjUfXuATUJs0a4ti8sBZHY0DKZ1O1UCj3cpw+IEKxUwG2UtXNOjS5/JkqxQ2v5GUMFn62mtZyXAfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
                url:"ajax/listadoajax.php",
                method: "GET",
                success: function(respuesta){
                    
                    var data1 =JSON.parse(respuesta);
                    console.log(data1);
                    var temp = [];
                    var tiempos = [];

                    for(let index = 0; index < data1.length; index++){
                        temp.push(data1[index][1]);
                        tiempos.push(data1[index][2]);
                    }

                    const ctx = document.getElementById('myChart');
                    const myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: tiempos,
                            datasets: [{
                                label: '# of Votes',
                                data: temp,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                }
            });
        });
    </script>    
  </body>
</html>