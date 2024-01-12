
<?php 
  $loggedin = false;
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin = true;}
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "users";
  
  $conn = mysqli_connect($server,$username,$password,$database);
  
 ?>

 <style>
  .bt1{
    background: white;
    border-radius: 14px; 
    color: #001866;
    font-weight: bold;
    font-size: 14px;
    border: 1px solid #001866;
    padding: 10px 25px;
}
.bt1:hover{
    background: #001866;
    font-weight: normal;
    color: white;
  
}
#payNow{
    border-radius: 14px;
    font-size: 14px;
    margin-top: 14px;
    cursor: not-allowed;
    padding: 10px 54px;
    height: 52px;
    color: white;
    background: #001866;
    border: none;
}
#total{
    float: right;
    color: #001b69;
    font-size: 17px;
    font-weight: bold;
}
.perBookRate{
  width: 55px;
}
 </style>
<!-- Modal -->

<?php  
        if($loggedin){
          $sql = "SELECT * FROM `books_details`";
          $result = mysqli_query($conn, $sql);
    
          if(!$result==0){
          while ($num = mysqli_fetch_assoc($result)) {
            $incr = 1;
        echo'
        <div class="modal fade" id="cartModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">   
                 <div class="modal-content" style="height:auto;min-height: 420px;">
                     <div class="modal-header">
                         <h1 class="modal-title fs-5" id="staticBackdropLabel">Order Details</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                       <div class="box1hai" id="box1hai" style="display: none; height: auto; width: 93%; box-shadow: 0px 0px 25px #c2c2c2; color: #717171; padding: 23px 11px;border-radius: 24px; margin: auto; margin-top: 28px;">
                         <h4 style="color: #737373;font-weight: bold;">Customizable Notebook</h4>
                         <h6  style="color: #737373;font-weight: bold;">Order no. '.$incr.'</h6>
                         <h6 id="Description" style="color: #737373;font-weight: bold;">/'.$num['Book_size'].'/'.$num['Book_binding'].'/'.$num['Book_pages'].'/'.$num['Book_ruling'].'/</h6>
                         <div>
                           <div class="d-flex justify-content-between"><h5>Quantity:</h5><h5 style="color: #001463;font-weight: bold;">6</h5></div>
                           <div  class="d-flex justify-content-between">
                             <h5 class="d-inline" style="font-weight: bold;">Total Amount:</h5>
                             <h5 id="total">₹ 0</h5>
                           </div>
                         </div>
                         <div  style=" width: 95%;
                         display: block;
                         margin: auto;">
                            
                             <div>   <button class="d-block bt1 w-100" id="btn2"  onclick="showDetail()">View Details</button> </div>
                            </div>
                            
                            <hr>
                            <div id="fullDetails" style="display: none;">

                              <div>     
                                <div  class="d-flex justify-content-between">
                                  <p id="details1" style="font-size: 15px;">'.$num['Book_size'].'/'.$num['Book_binding'].'/'.$num['Book_pages'].'/'.$num['Book_ruling'].'</p>
                                  <span class="fw-bold text-black perBookRate" id="perBookRate1">₹ 0</span>
                                </div>
                              </div>
                              <div>     
                                <div  class="d-flex justify-content-between">
                                  <p id="details2" style="font-size: 15px;">'.$num['Book_size'].'/'.$num['Book_binding'].'/'.$num['Book_pages'].'/'.$num['Book_ruling'].'</p>
                                  <span class="fw-bold text-black perBookRate" id="perBookRate2">₹ 0</span>
                                </div>
                              </div>
                              <div>     
                                <div  class="d-flex justify-content-between">
                                  <p id="details3" style="font-size: 15px;">'.$num['Book_size'].'/'.$num['Book_binding'].'/'.$num['Book_pages'].'/'.$num['Book_ruling'].'</p>
                                  <span class="fw-bold text-black perBookRate" id="perBookRate3">₹ 0</span>
                                </div>
                              </div>
                              <div>     
                                <div  class="d-flex justify-content-between">
                                  <p id="details4" style="font-size: 15px;">'.$num['Book_size'].'/'.$num['Book_binding'].'/'.$num['Book_pages'].'/'.$num['Book_ruling'].'</p>
                                  <span class="fw-bold text-black perBookRate" id="perBookRate4">₹ 0</span>
                                </div>
                              </div>
                              <div>     
                                <div  class="d-flex justify-content-between">
                                  <p id="details5" style="font-size: 15px;">'.$num['Book_size'].'/'.$num['Book_binding'].'/'.$num['Book_pages'].'/'.$num['Book_ruling'].'</p>
                                  <span class="fw-bold text-black perBookRate" id="perBookRate5">₹ 0</span>
                                </div>
                              </div>
                              <div  class="d-flex justify-content-between">
                                <p id="details6" style="font-size: 15px;">'.$num['Book_size'].'/'.$num['Book_binding'].'/'.$num['Book_pages'].'/'.$num['Book_ruling'].'</p>
                                <span class="fw-bold text-black perBookRate" id="perBookRate6">₹ 0</span>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="modal-footer" id="modal-footer" style="border-top: none;display: none;">
                      <div style=" padding: 13px;   width: 98%;border-radius: 10px;  box-shadow: 0px 0px 7px #656565;   margin: auto;  margin-bottom: 7px;">
                        <div class="d-flex justify-content-between"><div style="    margin-top: 14px;"><span id="final" style="font-size: 18px;color: #001b69;font-weight: bold;">₹ 0</span><br><span style="font-size: 18px;">View Price Breakdown</span></div><div 
                        onclick="hide()"
                        style="    height: 7px;
                        background: #585858;
                        border-radius: 14px;
                        width: 67px;"></div><button id="payNow" disabled>Pay Now</button></div>
                          <div style="display: none;margin-top: 34px;" id="hide">
                            <hr>
                            <p class="d-block fw-bold">Payment Breakdown</p>
                            <div class="d-flex justify-content-between"><span class="Points">Cart Total</span><span id="cartTotal" class="Amount">₹ 0</span></div>
                            <div class="d-flex justify-content-between"><span class="Points">Coupon Discount</span><span class="Amount">₹ 0</span></div>
                            <div class="d-flex justify-content-between"><span class="Points">Shipping Charges </span><span class="Amount" style="font-size: 14px;">₹ 80</span></div>
                            <div class="d-flex justify-content-between" style="height: 41px;"><span class="Points" style="font-size: 18px;">Total Price <br><span style="font-size: 10px; color: orange;">Inclusive of GST*</span></span><span id="totalPrice" class="Amount">₹ 0</span>
                            </div>
                          </div>
                      </div>
                    </div>

                  </div>
                 </div>
                </div>
              </div>';
              $incr = $incr + 1;
            }
          }
          if(!$result==0){
            echo '<div class="modal fade" id="cartModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">   
               <div class="modal-content" style="height:800px;min-height: 420px;">
                   <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Order Details</h1>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">
                      <img src="Pictures/modal.svg" alt="" style="display: block; margin: auto;">
                      <p  class="fs-6" style=" text-align: center; margin-top: 10px;">YOUR BAG IS EMPTY</p>
                      <p  class="text-center">You haven’t added anything to your bag. We’re sure you’ll find something in our store</p>
                  </div>
                  <div class="modal-footer">
                    <a  href="specification.php" style=" width: 100%; text-decoration: none;">
                      <button type="button" class="text-white" style="background-color: #001b69; width: 99%; padding: 11px;border: none; border-radius: 28px;">Add Notebooks</button>
                    </a>
                  </div>
               </div>
              </div>
            </div>';
          }
}
  

        else{
        echo'<div class="modal fade" id="cartModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
          <div class="modal-dialog">   
             <div class="modal-content" style="height:800px;min-height: 420px;">
                 <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel1">Shopping Cart</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                    <img src="Pictures/modal.svg" alt="" style="display: block; margin: auto;">
                    <p  class="fs-6" style=" text-align: center; margin-top: 10px;">YOUR BAG IS EMPTY</p>
                    <p  class="text-center">You haven’t added anything to your bag. We’re sure you’ll find something in our store</p>
                </div>
                <div class="modal-footer">
                  <a  href="login.php" style=" width: 100%; text-decoration: none;">
                    <button type="button" class="text-white" style="background-color: #001b69; width: 99%; padding: 11px;border: none; border-radius: 28px;">SignIn/SignUp</button>
                  </a>
                </div>
             </div>
            </div>
          </div>';
      } 
      ?>
        
 

<script>  

       var c = localStorage.getItem("clicked");
        if(c == 1){
          document.getElementById('box1hai').style.display = "block";
          document.getElementById('modal-footer').style.display = "block";
          var pages = localStorage.getItem("pages");
          var size = localStorage.getItem("size");
          var binding = localStorage.getItem("binding");
          var ruling = localStorage.getItem("ruling");
          // document.getElementById('Description').innerHTML = `/${size}/${binding}/${pages} pages/${ruling}`;

        }
      

        var b = localStorage.getItem("myValue");
        if(b === "₹ 600"){
          document.getElementById('total').innerText = "₹ 680";
          
            for (var i = 1; i < 7; i++) {
                document.getElementById(`perBookRate${i}`).innerText = "₹ 100";
            }
          document.getElementById('cartTotal').innerText = "₹ 600";
          document.getElementById('totalPrice').innerText ="₹ 680";
          document.getElementById('final').innerText ="₹ 680";
        }
        if(b === "₹ 900"){
          
            document.getElementById('total').innerText = "₹ 980";
            for (var i = 1; i < 7; i++) {
                document.getElementById(`perBookRate${i}`).innerText = "₹ 150";
            }
            document.getElementById('cartTotal').innerText = "₹ 900";
            document.getElementById('totalPrice').innerText = "₹ 980";
            document.getElementById('final').innerText ="₹ 980";
        }
       

       function hide() {
        if( document.getElementById('hide').style.display  === "block"){
          document.getElementById('hide').style.display  = "none"
       }
        else{
          document.getElementById('hide').style.display  = "block"
       }
      }
      function showDetail() {
        if( document.getElementById('fullDetails').style.display  === "block"){
          document.getElementById('fullDetails').style.display  = "none";
          document.getElementById('btn2').innerText  = "View Details";
          
        }
        else{
          document.getElementById('fullDetails').style.display  = "block";
          document.getElementById('btn2').innerHTML  = "Hide Details";
       }
      }
        
      // for (var i = 1; i < 7; i++) {
      //           document.getElementById(`details${i}`).innerHTML = `/${size}/${binding}/${pages} pages/${ruling}`;
      //       }    
            
</script>