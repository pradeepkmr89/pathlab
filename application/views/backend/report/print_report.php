<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DotNetTec - Invoice html template bootstrap</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
    <style>

html,body {
    margin:10px;
    padding:0;
}

@media print {

      .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6,
      .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
           float: left;               
      }

      .col-sm-12 {
           width: 100%;
      }

      .col-sm-11 {
           width: 91.66666666666666%;
      }

      .col-sm-10 {
           width: 83.33333333333334%;
      }

      .col-sm-9 {
            width: 75%;
      }

      .col-sm-8 {
            width: 66.66666666666666%;
      }

       .col-sm-7 {
            width: 58.333333333333336%;
       }

       .col-sm-6 {
            width: 50%;
       }

       .col-sm-5 {
            width: 41.66666666666667%;
       }

       .col-sm-4 {
            width: 33.33333333333333%;
       }

       .col-sm-3 {
            width: 25%;
       }

       .col-sm-2 {
              width: 16.666666666666664%;
       }

       .col-sm-1 {
              width: 8.333333333333332%;
        }            
}

</style>
</head>
<body onload="print()">

<div class="page-content container">
    <div class="page-header text-blue-d2">
        

         
    </div>

    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                            <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                          <h1>Maa path</h1>
                        </div>
                    </div>
                </div>
                <!-- .row -->

                <hr class="row brc-default-l1 mx-n1 mb-4" />

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                             <span class="text-600 text-110 text-blue align-middle">Patient Name: <?php echo $res[0]->pname;?></span>
                        </div>
                        <div class="text-grey-m2">
                            <div class="my-1">
                                Address:  <?php echo $res[0]->paddress;?>
                            </div>
                            <div class="my-1">
                              Reffered by Dr: <?php echo $res[0]->doctername;?>
                            </div>
                      
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                         <div class="text-grey-m2">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                Age: <?php echo $res[0]->page;?>
                            </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Gender:</span> <?php echo $res[0]->pgender;?></div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span> <?php echo date("d-m-Y", strtotime($res[0]->rdate)); ?></div>
 
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="mt-4">
                   
                     
                    <div class="row border-b-2 brc-default-l2"></div>

                    <!-- or use a table instead -->
                 
            <div class="table-responsive">
                <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                    <thead class="bg-none bgc-default-tp1">
                        <tr class="text-white">
                            <th class="opacity-2">#</th>
                            <th>Test Name</th>
                            <th>Result</th>
                            <th>Unit</th>
                            <th width="140">Normal</th>
                        </tr>
                    </thead>

                    <tbody class="text-95 text-secondary-d3">
                        <tr></tr>
                        <tr><td colspan="5"><?php echo $res[0]->test_group; ?></td></tr>
                        <?php
                            $json  = json_decode($res[0]->json_data);
                          
                         foreach($json->data as $key=>$val){  
                            $id = $val->id;
                            $shores = $this->db->query("select * from test_details where id ='$id'")->result();
                          ?>
                        <tr>
                            <td><?php echo ++$key; ?></td>
                            <td><?php echo $val->name; ?></td>
                            <td><?php echo $val->result; ?></td>
                            <td class="text-95"><?php echo $shores[0]->unit;?></td>
                            <td class="text-secondary-d2"><?php echo $shores[0]->normal;?></td>
                        </tr> 
                        <?php } ?>
                    </tbody>
                </table>
            </div>  
                    <hr /> 
                    <div>
                        <span class="text-secondary-d1 text-105">Note:- All reports are to be clinically co-related, if unexpected please send the patient with fresh sample for recheck-up free of cost within two days. Not valid for medico-legal purpose.</span>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
 </body>
</html>