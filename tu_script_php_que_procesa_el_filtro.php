
<br />
<section>
            <div class="container">
              
               <div class="table-responsive-xl pb-6">
                  <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4 flex-nowrap">
        
                   
                         
              

                     
				<?php

require "conexion.php";
$filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);

				if($filter){
					$sql = mysqli_query($con, "SELECT * FROM datos WHERE ubicacion='$filter' ORDER BY id ASC");
				}else{
					$sql = mysqli_query($con, "SELECT * FROM datos ORDER BY id ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo "<tr><td colspan='8'>No hay datos.</td></tr>";
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
                        <div class="col">
                        <div class="card card-product">
                           <div class="card-body">
                              <div class="text-center position-relative">
                                 <a href="pages/shop-single.html"><img src="'.$row['imagen'].'" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>

                                 <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                       <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                    </a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                 </div>
                              </div>
                              <div class="text-small mb-1">
                                 <a href="#!" class="text-decoration-none text-muted"><small>                                            <div class="rt-location">
                                 <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="https://www.w3.org/2000/svg">
                                     <path d="M6.5 9.71429C5.91565 9.71429 5.34442 9.53624 4.85854 9.20268C4.37267 8.86911 3.99398 8.39499 3.77036 7.84029C3.54674 7.28558 3.48823 6.6752 3.60223 6.08633C3.71623 5.49746 3.99762 4.95655 4.41082 4.532C4.82402 4.10745 5.35047 3.81832 5.9236 3.70119C6.49672 3.58405 7.09078 3.64417 7.63065 3.87394C8.17053 4.1037 8.63196 4.4928 8.95661 4.99202C9.28126 5.49124 9.45454 6.07816 9.45454 6.67857C9.4536 7.4834 9.14202 8.25498 8.58814 8.82408C8.03426 9.39318 7.28331 9.71332 6.5 9.71429ZM6.5 4.85714C6.14939 4.85714 5.80665 4.96397 5.51513 5.16411C5.2236 5.36425 4.99639 5.64872 4.86222 5.98154C4.72804 6.31436 4.69294 6.68059 4.76134 7.03391C4.82974 7.38724 4.99857 7.71178 5.24649 7.96652C5.49441 8.22125 5.81028 8.39472 6.15416 8.465C6.49803 8.53528 6.85447 8.49921 7.17839 8.36135C7.50232 8.22349 7.77918 7.99004 7.97397 7.6905C8.16876 7.39097 8.27273 7.03882 8.27273 6.67857C8.27226 6.19565 8.08534 5.73264 7.75299 5.39116C7.42064 5.04968 6.97001 4.85763 6.5 4.85714Z" fill="#BEC2C9"></path>
                                     <path d="M6.5 17L1.5151 10.9595C1.44583 10.8688 1.37728 10.7776 1.30946 10.6857C0.457949 9.53323 -0.00205706 8.12553 6.91533e-06 6.67857C6.91533e-06 4.9073 0.684826 3.20858 1.90381 1.95611C3.1228 0.703633 4.77609 0 6.5 0C8.22391 0 9.8772 0.703633 11.0962 1.95611C12.3152 3.20858 13 4.9073 13 6.67857C13.0021 8.12487 12.5423 9.53193 11.6911 10.6839L11.6905 10.6857C11.6905 10.6857 11.5133 10.9249 11.4867 10.9571L6.5 17ZM2.25255 9.95411C2.25373 9.95411 2.39082 10.1411 2.42214 10.1812L6.5 15.1227L10.5832 10.1745C10.6092 10.1411 10.7474 9.95289 10.748 9.95229C11.4436 9.01068 11.8195 7.8607 11.8182 6.67857C11.8182 5.22935 11.2579 3.83949 10.2605 2.81474C9.26317 1.78999 7.91047 1.21429 6.5 1.21429C5.08953 1.21429 3.73683 1.78999 2.73948 2.81474C1.74213 3.83949 1.18182 5.22935 1.18182 6.67857C1.18058 7.86143 1.55633 9.01207 2.25255 9.95411Z" fill="#BEC2C9"></path>
                                 </svg>
                                 <a href="">'.$row['ubicacion'].'</a><span class="rtcl-delimiter">       </div></small></a>
                              </div>
                              <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">'.$row['nombre'].'</a></h2>

                              <div class="d-flex justify-content-between align-items-center mt-3">
                                 <div>
                                    <span class="text-dark">'.$row['precio'].'</span>
                                    <span class="text-decoration-line-through text-muted">$18</span>
                                 </div>
                                 <div>
                                    <small class="text-warning">
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                    </small>
                                    <span><small>4.5</small></span>
                                 </div>
                              </div>
                              <div class="d-grid mt-2">
                              
                                 <a href="#!" class="btn btn-primary">
                                    <svg
                                       xmlns="https://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add to cart
                                 </a>
                                 <div class="d-flex justify-content-start text-center mt-3">
                                 <div class="deals-countdown w-100" data-countdown="2028/10/10 00:00:00"></div>
                             </div>
                              </div>
                          
                           </div>
                        </div>
                     </div>


             

                        
						';
						$no++;
					}
				}
				?>
 
 </div>
               </div>
            </div>
         </section>