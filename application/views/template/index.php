<!-- Content Wrapper. Contains page content -->
<style>
  #risalah_sidang {
    width: 100%;
    height: 500px;
  }
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Dashboard</h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h5 class="text-uppercase"><strong>Pegawai</strong></h5>
            <h3><?= $data1[0]['value'] ?></h3>
          </div>
          <div class="icon">
            <i class="mdi mdi-folder-account"></i>
          </div>
          <a href="<?= base_url('master/pegawai') ?>" class="small-box-footer">Detail <i class="mdi mdi-chevron-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h5 class="text-uppercase"><strong>Safety Patrol</strong></h5>
            <h3><?= $data2[0]['value'] ?></h3>
          </div>
          <div class="icon">
            <i class="mdi mdi-chart-areaspline"></i>
          </div>
          <a href="<?= base_url('master/form_laporan_bulanan') ?>" class="small-box-footer">Detail <i class="mdi mdi-chevron-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h5 class="text-uppercase"><strong>Risalah Sidang</strong></h5>
            <h3><?= $data3[0]['value'] ?></h3>
          </div>
          <div class="icon">
            <i class="mdi mdi-message"></i>
          </div>
          <a href="<?= base_url('master/hasil_rapat') ?>" class="small-box-footer">Detail <i class="mdi mdi-chevron-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h5 class="text-uppercase"><strong>Kecelakaan Kerja</strong></h5>
            <h3>65</h3>
          </div>
          <div class="icon">
            <i class="mdi mdi-worker"></i>
          </div>
          <a href="<?= base_url('') ?>" class="small-box-footer">Detail <i class="mdi mdi-chevron-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-header">
            <div class="row">
              <div class="col-md-6">
                <h4>
                  Laporan Safety Patrol Bulan ini
                </h4>
              </div>
            </div>
          </div>
          <div class="box-body">
            <div id="kt_amcharts_6" style="height: 500px;"></div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-header">
            <div class="row">
              <div class="col-md-6">
                <h4>
                  Risalah Sidang Bulan ini
                </h4>
              </div>
            </div>
          </div>
          <div class="box-body">
            <div id="risalah_sidang"></div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<script src="//www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
<script src="//www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
<script src="//www.amcharts.com/lib/3/radar.js" type="text/javascript"></script>
<script src="//www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>
<script src="//www.amcharts.com/lib/3/plugins/tools/polarScatter/polarScatter.min.js" type="text/javascript"></script>
<script src="//www.amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>
<script src="//www.amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>
<script src="//www.amcharts.com/lib/3/themes/light.js" type="text/javascript"></script>
<script type="text/javascript">
  var chart = AmCharts.makeChart("kt_amcharts_6", {
    "type": "serial",
    "theme": "light",
    "marginRight": 40,
    "marginLeft": 40,
    "autoMarginOffset": 20,
    "mouseWheelZoomEnabled": true,
    "dataDateFormat": "YYYY-MM-DD",
    "valueAxes": [{
      "id": "v1",
      "axisAlpha": 0,
      "position": "left",
      "ignoreAxisWidth": true
    }],
    "balloon": {
      "borderThickness": 1,
      "shadowAlpha": 0
    },
    "graphs": [{
      "id": "g1",
      "balloon": {
        "drop": true,
        "adjustBorderColor": false,
        "color": "#ffffff"
      },
      "bullet": "round",
      "bulletBorderAlpha": 1,
      "bulletColor": "#FFFFFF",
      "bulletSize": 5,
      "hideBulletsCount": 50,
      "lineThickness": 2,
      "title": "red line",
      "useLineColorForBulletBorder": true,
      "valueField": "value",
      "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
    }],
    "chartScrollbar": {
      "graph": "g1",
      "oppositeAxis": false,
      "offset": 30,
      "scrollbarHeight": 80,
      "backgroundAlpha": 0,
      "selectedBackgroundAlpha": 0.1,
      "selectedBackgroundColor": "#888888",
      "graphFillAlpha": 0,
      "graphLineAlpha": 0.5,
      "selectedGraphFillAlpha": 0,
      "selectedGraphLineAlpha": 1,
      "autoGridCount": true,
      "color": "#AAAAAA"
    },
    "chartCursor": {
      "pan": true,
      "valueLineEnabled": true,
      "valueLineBalloonEnabled": true,
      "cursorAlpha": 1,
      "cursorColor": "#258cbb",
      "limitToGraph": "g1",
      "valueLineAlpha": 0.2,
      "valueZoomable": true
    },
    "valueScrollbar": {
      "oppositeAxis": false,
      "offset": 50,
      "scrollbarHeight": 10
    },
    "categoryField": "date",
    "categoryAxis": {
      "parseDates": true,
      "dashLength": 1,
      "minorGridEnabled": true
    },
    "dataProvider": <?php echo json_encode($chart, JSON_NUMERIC_CHECK); ?>
  });

  chart.addListener("rendered", zoomChart);

  zoomChart();

  function zoomChart() {
    chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
  }

  am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    // Create chart instance
    var chart = am4core.create("risalah_sidang", am4charts.XYChart3D);

    // Add data
    chart.data = <?php echo json_encode($chart_2, JSON_NUMERIC_CHECK); ?>;

    // Create axes
    let categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "date";
    categoryAxis.renderer.labels.template.rotation = 270;
    categoryAxis.renderer.labels.template.hideOversized = false;
    categoryAxis.renderer.minGridDistance = 20;
    categoryAxis.renderer.labels.template.horizontalCenter = "right";
    categoryAxis.renderer.labels.template.verticalCenter = "middle";
    categoryAxis.tooltip.label.rotation = 270;
    categoryAxis.tooltip.label.horizontalCenter = "right";
    categoryAxis.tooltip.label.verticalCenter = "middle";

    let valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.title.text = "Values";
    valueAxis.title.fontWeight = "bold";

    // Create series
    var series = chart.series.push(new am4charts.ColumnSeries3D());
    series.dataFields.valueY = "value";
    series.dataFields.categoryX = "date";
    series.name = "Value";
    series.tooltipText = "{categoryX}: [bold]{valueY}[/]";
    series.columns.template.fillOpacity = .8;

    var columnTemplate = series.columns.template;
    columnTemplate.strokeWidth = 2;
    columnTemplate.strokeOpacity = 1;
    columnTemplate.stroke = am4core.color("#FFFFFF");

    columnTemplate.adapter.add("fill", function(fill, target) {
      return chart.colors.getIndex(target.dataItem.index);
    })

    columnTemplate.adapter.add("stroke", function(stroke, target) {
      return chart.colors.getIndex(target.dataItem.index);
    })

    chart.cursor = new am4charts.XYCursor();
    chart.cursor.lineX.strokeOpacity = 0;
    chart.cursor.lineY.strokeOpacity = 0;

  }); // end am4core.ready()
</script>