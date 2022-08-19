    <?php
    $items = DB::select("SELECT users.full_name,item.cost, cart_items.* from cart_items join cart on cart_items.cart_id = cart.id join 
    users on users.id=cart.user_id join item on item.id=cart_items.item_id");

    
    ?>    
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">

              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <h6 class="card-title card-padding pb-0">Cart Items Items</h6>
                  <div class="table-responsive">
                    <table class="table table-hoverable">
                      <thead>
                        <tr>
                          <th class="text-left">Cart ID</th>
                          <th>Customer</th>
                          <th>Game ID</th>
                          <th>Game Count</th>
                          <th>Unit Cost(UGX)</th>
                          <th style="color: green;font-weight:bolder">Worth(UGX)</th>
                          <th>Cart Status</th>
                          <th>Added On</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php 
                      $total_count = 0;
                      $estimated_income =0; 
                      ?>
                      <?php foreach($items as $item):?>
                        <?php
                       
                        $total_count+=$item["count"];
                        $estimated_income+=$item["cost"]*$item["count"];
                        $status_text =  $item["cart_status"]==1?"Finished":"Pending";
                        $status_style =  $item["cart_status"]==1?"--button-success-color":"--button-secondary-color";
                       
                        ?>
                        <tr>
                          <td class="text-left">#<?php echo($item["id"]) ?></td>
                          <td style="font-weight: bold;color:var(--button-accent-color)"><?php echo($item["full_name"]) ?></td>
                          <td><?php echo($item["item_id"]) ?></td>
                          <td><?php echo($item["count"]) ?></td>
                          <td><?php echo($item["cost"]) ?></td>
                          <td style="color: green;font-weight:bolder"><?php echo(($item["cost"]*$item["count"])) ?></td>
                         
                          <td style="color:var(<?php echo($status_style)?>);font-weight:bold"><?php echo($status_text)?></td>
                          <td style="font-weight: bold;"><?php echo(

                              date("D d, m Y h:m:s a",strtotime($item["created_at"]))
                              
                              ) ?></td>
                        
                        
                          <td>
                          <i class="material-icons mdc-button__icon" style="color: var(--button-danger-color);">delete</i>
                          <i class="material-icons mdc-button__icon" style="color: var(--button-success-color);">info</i>
                          </td>
                        
                        </tr>
                        <?php endforeach?>


                        <tr>
                          <td class="text-left"></td>
                          <td></td>
                          <td style="font-weight: bolder;">Game Total</td>
                          <td class="text-bold text-primary" style="font-weight: bolder;"><?php echo($total_count) ?></td>
                          <td>Estimated Income:</td>
                          <td style="color: brown;font-weight:bolder">UGX <?php echo($estimated_income)  ?></td>
                          <td></td>
                          <td></td>
                        </tr>


                   
                    </tbody>

                    </table>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </main>
        