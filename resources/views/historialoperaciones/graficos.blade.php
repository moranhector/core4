@extends('layouts.app')

@section('content')

<!-- Main content -->
<section class="content container-fluid">

    <!--------------------------
        | Your Page Content Here |
        -------------------------->

    <!-- Split button -->
    <div class="btn-group">
        <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Mes analizado: {{ $periodo }} Seleccionar Mes <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href={{ url('encuestas/graficar/0') }}>Mes Actual</a></li>
            <li><a href={{ url('encuestas/graficar/202207') }}>Mes Anterior</a></li>
            <li role="separator" class="divider"></li>
            <li><a href={{ url('encuestas/graficar/202207') }}>Julio 2022</a></li>

        </ul>
    </div>





    <!-- primera fila -->

    <div class="row">


        <div class="col-md-8">



            <div class="panel panel-default"
                style="box-shadow: 6px 20px 10px black; margin-top: 5px; margin-bottom: 5px ">
                <div class="panel-heading">
                    <div>
                        <img src="/images/logo-small.png" alt="CGP ">
                    </div>


                </div>
                <div class="panel-body">
                    <b>Historia de Operaciones </b> <br>
                    MES: {{$mes}}<br>
                    Cantidad de Expedientes: 1240
                    <br>
                    Cantidad de Registros: {{ $cantidad }}
                </div>
            </div>
        </div>



    </div>






    <!-- <div class="row">


          <div class="col-md-4">
              <div class="panel panel-default" style="box-shadow: 6px 20px 10px black; margin-top: 5px; margin-bottom: 5px " >
                  <div class="panel-heading"><b>Tipos de Vehículo</b>
                  </div>
                  <div class="panel-body">
                          <canvas id="canvas3" height="280" width="400"></canvas>
                  </div>
              </div>
          </div>       

          <div class="col-md-4">
            <div class="panel panel-default" style="box-shadow: 6px 20px 10px black; margin-top: 5px; margin-bottom: 5px " >
                <div class="panel-heading"><b>Años como cliente</b>
                </div>
                <div class="panel-body">
                        <canvas id="canvasAnios" height="280" width="400"></canvas>
                </div>
            </div>
          </div>  

      </div> -->

    <!-- segunda fila -->


    <div class="row">




        <div class="col-md-4">
            <div class="panel panel-default"
                style="box-shadow: 6px 20px 10px black; margin-top: 5px; margin-bottom: 5px ">


                <div class="panel-heading"><b>Expedientes</b></div>

                <div>
                    <div class="inner" align="center">
                        <h1> {{ $cantidad }} </h1>

                        <p>Expedientes entrantes</p>
                    </div>

                </div>


            </div>
        </div>





    </div>

    <!-- <div class="row"> -->


    <!-- </div> -->

    <div class="row">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $expedientes }}</h3>
                    <p>Expedientes</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $expedientes2021 }}<sup style="font-size: 20px"></sup></h3>
                    <p>Expedientes 2021</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>44</h3>
                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>
                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>




    <div class="card">
        <div class="card-header ui-sortable-handle" style="cursor: move;">
            <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Sales
            </h3>
            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content p-0">

                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="revenue-chart-canvas" height="300" style="height: 300px; display: block; width: 351px;"
                        width="351" class="chartjs-render-monitor"></canvas>
                </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="0" style="height: 0px; display: block; width: 0px;"
                        class="chartjs-render-monitor" width="0"></canvas>
                </div>
            </div>
        </div>
    </div>




    <div class="card bg-gradient-info">
        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
            <h3 class="card-title">
                <i class="fas fa-th mr-1"></i>
                Sales Graph
            </h3>
            <div class="card-tools">
                <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                    <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                    <div class=""></div>
                </div>
            </div>
            <canvas class="chart chartjs-render-monitor" id="line-chart"
                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 341px;"
                width="341" height="250"></canvas>
        </div>

        <div class="card-footer bg-transparent">
            <div class="row">
                <div class="col-4 text-center">
                    <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input
                            type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                            data-fgcolor="#39CCCC" readonly="readonly"
                            style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;">
                    </div>
                    <div class="text-white">Mail-Orders</div>
                </div>

                <div class="col-4 text-center">
                    <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input
                            type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                            data-fgcolor="#39CCCC" readonly="readonly"
                            style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;">
                    </div>
                    <div class="text-white">Online</div>
                </div>

                <div class="col-4 text-center">
                    <div style="display:inline;width:60px;height:60px;"><canvas width="60" height="60"></canvas><input
                            type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                            data-fgcolor="#39CCCC" readonly="readonly"
                            style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;">
                    </div>
                    <div class="text-white">In-Store</div>
                </div>

            </div>

        </div>

    </div>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js"
        charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>















</section>
<!-- /.content -->
</div>






</body>


@endsection












</html>