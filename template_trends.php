<?php
/* Template Name: Trends */

$durationOptions = [
    0 => "Last Available Date",
    1 => "Year To Date",
    7 => "Last 7 days",
    2 => "Last 14 Days",
    3 => "Last 1 Month",
    4 => "Last 3 Months",
    5 => "Last 1 Year",
    6 => "Last 5 Years"
];

$cacheKey = "leadway_trends_page_info";
delete_transient($cacheKey);
$trends = get_transient($cacheKey);
// forcing cache removal
// if (!$trends) {
if (true) {
    $url = "https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/Chart";
    $duration = array_get($_GET, 'duration', 3);
    $trends['f1'] = sendReq($url, [
        "Fund1" => true,
        "duration" => $duration
    ]);
    $trends['f2'] = sendReq($url, [
        "Fund2" => true,
        "duration" => $duration
    ]);
       $trends['f3'] = sendReq($url, [
        "Fund3" => true,
        "duration" => $duration
    ]);
    $trends['f4'] = sendReq($url, [
        "Fund4" => true,
        "duration" => $duration
    ]);
    $trends = [
                  'f1' => [
            'label' => 'Fund 1',
            'bg_color' => 'rgba(174, 255, 0, 0.2)',
              'color' => 'rgba(255, 24, 0, 1)',
            'response' => ($response = getResponse($trends['f1'])) ? $response->Data : false

        ],
               'f2' => [
            'label' => 'Fund 2',
            'bg_color' => 'rgba(54, 162, 235, 0.2)',
            'color' => 'rgba(54, 162, 235, 1)',
            'response' => ($response = getResponse($trends['f2'])) ? $response->Data : false
        ],
        
                
          'f3' => [
            'label' => 'Fund 3',
            'bg_color' => 'rgba(255, 0, 234, 0.2)',
            'color' => 'rgba(54, 162, 235, 1)',
            'response' => ($response = getResponse($trends['f3'])) ? $response->Data : false

        ],
        
        'f4' => [
            'label' => 'Fund 4',
            'bg_color' => 'rgba(255, 159, 64, 0.2)',
            'color' => 'rgba(255, 159, 64, 1)',
            'response' => ($response = getResponse($trends['f4'])) ? $response->Data : false
        ],
 

        

    ];
    if (isset($trends['f1']['response']) && isset($trends['f2']['response']) && isset($trends['f3']['response']) && isset($trends['f4']['response'])) {
        set_transient($cacheKey, $trends, DAY_IN_SECONDS);
    }
}

get_header();
?>

<!-- Body and Main Content of page -->
<div class="container" id="m-top">
    <div class="row">
        <div class="col-12">
            <div class="page-wrapper" style="min-height:300px;padding: 50px 0;">
                <div class="page-content">
                    <br/>

          <div class="row text-center"> 
          <div class='col-3'> <button class="btn btn-outline fund1" > Fund 1 </button>   
          </div>
             <div class='col-3'>  <button class="btn btn-outline fund2"> Fund 2 </button>   </div>
                <div class='col-3'> <button class="btn btn-outline fund3"> Fund 3</button>    </div>
                   <div class='col-3'>
                         <button class="btn btn-outline fund4"> Fund 4 </button>   
                  </div>
          </div>
                    <h1 class="page-title text-center"><?php _e('Trends'); ?></h1>

                    <div class="text-center" style="margin: 20px 0">
                        <?php foreach($durationOptions as $key => $option) {
                            $active = $key == array_get($_GET, 'duration', 3) ? 'btn-primary active' : 'btn-default';
                            echo '<a href="?duration='. $key .'" class="btn ' . $active . '" role="button">'.$option.'</a>';
                        } ?>
                    </div>


                    <div class="row" id="fund1-cont">
                        <!-- fund 1 -->
                        <div class="col-12">
                           
                            <?php if ($trends['f1']): ?>
                                <canvas id="fund1"></canvas>
                            <?php else: ?>
                                <h2>No trend data available at this time, please check back soon.</h2>
                            <? endif ?>
                       </div>
                       </div>
                        
                        <!-- fund2 -->
                        <div class="row" id="fund2-cont"> 
                        <div class="col-12">
                         
                            <?php if ($trends['f2']): ?>
                                <canvas id="fund2"></canvas>
                            <?php else: ?>
                                <h2>No trend data available at this time, please check back soon.</h2>
                            <? endif ?>
                       </div>
                       
                        </div>
                          
                 
                    
                        <!-- fund 3 -->
                        <div class="row" id="fund3-cont">
                        
                          <div class="col-12" >
                       
                            <?php if ($trends['f3']): ?>
                                <canvas id="fund3"></canvas>
                            <?php else: ?>
                                <h2>No trend data available at this time, please check back soon.</h2>
                            <? endif ?>
                       
                     </div>
                        
                        </div>
                      
                        
                        <!-- fund 4 -->
                        <div class=row id="fund4-cont"> 
                             <div class="col-12">
                         
                            <?php if ($trends['f4']): ?>
                                <canvas id="fund4"></canvas>
                            <?php else: ?>
                                <h2>No trend data available at this time, please check back soon.</h2>
                            <? endif ?>
                        </div>
                        </div>
                     
                  

                </div>
                <!-- .page-content -->
            </div>
            <!-- .page-wrapper -->
        </div>
    </div>
</div>

<?php get_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<?php if(isset($trends['f1']['response'])):?>
<script>
//fund 1 chart 
    var ctx = document.getElementById('fund1').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: [
         <?php
    
                foreach($trends['f1']['response']->Datelabels as $label):
                    echo "'$label',";
                endforeach;
         
                
                ?>
            
            
            ],
            datasets: [
                {
            
                label: ' fund 1',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    data: [
                        <?php
                        foreach($trends['f1']['response']->values as $value):
                            echo "$value,";
                        endforeach
                        ?>
                    ]
                }

            ]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return value.toFixed(4);
                        }
                    }
                }]
            }
        }
    });
    
    
    //fund 2 chart 
    var ctx = document.getElementById('fund2').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: [
         <?php
           
                foreach($trends['f2']['response']->Datelabels as $label):
                    echo "'$label',";
                endforeach;
         
                
                ?>
            
            
            ],
            datasets: [
        
                {
                    label: 'fund 2',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)rgba(54, 162, 235, 1)?>',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    data: [
                        <?php
                        foreach($trends['f2']['response']->values as $value):
                            echo "$value,";
                        endforeach
                        ?>
                    ]
                }

            ]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return value.toFixed(4);
                        }
                    }
                }]
            }
        }
    });
    
     //fund 3 chart 
    var ctx = document.getElementById('fund3').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: [
         <?php
           
                foreach($trends['f3']['response']->Datelabels as $label):
                    echo "'$label',";
                endforeach;
         
                
                ?>
            
            
            ],
            datasets: [
              
                {
                    label: 'fund 3',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    data: [
                        <?php
                        foreach($trends['f3']['response']->values as $value):
                            echo "$value,";
                        endforeach
                        ?>
                    ]
                }

            ]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return value.toFixed(4);
                        }
                    }
                }]
            }
        }
    });
    
    
    //fund 3 chart 
    var ctx = document.getElementById('fund4').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: [
         <?php
           
                foreach($trends['f4']['response']->Datelabels as $label):
                    echo "'$label',";
                endforeach;
         
                
                ?>
            
            
            ],
            datasets: [
             
                {
                    label: 'fund 4',
                    backgroundColor: 'rgba(255, 159, 64, 0.2)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    data: [
                        <?php
                        foreach($trends['f4']['response']->values as $value):
                            echo "$value,";
                        endforeach
                        ?>
                    ]
                }

            ]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return value.toFixed(4);
                        }
                    }
                }]
            }
        }
    });
</script>
<?php endif ?>