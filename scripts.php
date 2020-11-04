   <!-- chartjs begins -->
   <script>
      let myChart = document.getElementById('myChart').getContext('2d');

      let virdiChart = new Chart(myChart, {
          type:'bar', //bar, horizontalBar, pie, line, doughnut, radar, polarArea
          data:{
              labels:['Total', 'Active', 'Passive'], //data
                  datasets:[{
                      label:'Total',
                      data:[
                        <?php echo json_encode($total_employees) ?>,
                        <?php echo json_encode($active_employees) ?>,
                        <?php echo json_encode($passive_employees) ?>,
                      ], //values

                  // backgroundColor: 'green'
                  backgroundColor: [ //color for each data
                      'rgb(0, 227, 150)',
                      'green',
                      'yellow'
                  ],
                  borderWidth:1, 
                  borderColor:'#777',
                  hoverBorderWidth:3,
                  hoverBorderColor:'#000'
              }]
          },
          //options for design
          options:{
              //the title
              title:{
                  display:true,
                  text:'Employee(s) information',
                  fontSize:20
              },
              //the smaller box of label info
              legend:{
                  display:true,
                  position:'top'
              },
              //layout:{} //for styling
              tooltips:{
                  enabled:true
              }
          }
      });


      
      // second chart

      let myChart2 = document.getElementById('myChart2').getContext('2d');

          let virdiChart2 = new Chart(myChart2, {
              type:'pie', //bar, horizontalBar, pie, line, doughnut, radar, polarArea
              data:{
                  labels:['Total', 'Present', 'Absent'], //data
                      datasets:[{
                          label:'Total',
                          data:[
                            //json_encode was used to encode the php values
                            <?php echo json_encode($processed_log) ?>,
                              // 558930,
                              72000,
                              30000
                          ], //values

                      // backgroundColor: 'green'
                      backgroundColor: [ //color for each data
                          'rgb(0, 227, 150)',
                          'green',
                          'yellow'
                      ],
                      borderWidth:1, 
                      borderColor:'#777',
                      hoverBorderWidth:2,
                      hoverBorderColor:'#000'
                  }]
              },
              //options for design
              options:{
                  //the title
                  title:{
                      display:true,
                      text:'Attendance information',
                      fontSize:20
                  },
                  //the smaller box of label info
                  legend:{
                      display:true,
                      position:'right'
                  },
                  //layout:{} //for styling
                  tooltips:{
                      enabled:true
                  }
              }
          })
  </script>

<script>
    //nav bar dropdown
      $(document).ready(function(){
        $('#department').hover(function(){
            $('#sub-department').toggle();
        });

        $('#division').hover(function(){
            $('#sub-division').toggle();
        });

        $('#attendance').hover(function(){
            $('#sub-attendance').toggle();
        });

        // $('#division').hover(function(){
        //     $('#sub-division').toggle();
        // });
        //nav bar dropdown ends
      })
   

        // var date = new Date();
        var date = new Date().getDate();
        var month = new Date().getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12.
        var year = new Date().getFullYear();
        var dateString = date + "/" + month + "/" + year;
        // console.log(dateString);
        var date = document.getElementById('date');
        date.innerHTML = dateString;
        // $('#date').innerHTML = dateString;
      </script>
      
