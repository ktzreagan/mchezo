    <?php
    $items = DB::select("SELECT item.*,item.id as item_id,quantity_name,category_name from item join quantities on quantities.id=item.quantity_id join categories on categories.id=item.category_id limit 5");
    ?>    



  
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">

              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <h6 class="card-title card-padding pb-0">All Items</h6>
                  <div class="table-responsive">
                    <table class="table table-hoverable">
                      <thead>
                        <tr>
                          <th class="text-left">Item Image</th>
                          <th class="th">Item Name</th>
                          <th>Item Price</th>
                          <th>Quantity</th>
                          <th>Available</th>
                          <th>Sold</th>
                          <th>Added On</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>


                      <?php foreach($items as $item):?>
                        <?php
                        $image = explode(",",$item["images"])[0];
                        ?>
                        <tr>
                          <td class="text-left"><img style="max-height: 50px;max-width:50px;" src="../images/<?php echo($image) ?>" ></td>
                          <td><?php echo($item["name"]) ?></td>
                          <td><?php echo($item["cost"]) ?></td>
                          <td><?php echo($item["quantity_name"]) ?></td>
                          <td><?php echo($item["available"]) ?></td>
                          <td style="color: var(--theme-color);"><?php echo($item["taken"]) ?></td>
                          <td style="font-weight: bold;"><?php echo(

                              date("D d, m Y h:m:s a",strtotime($item["created_at"]))
                              
                              ) ?></td>
                        
                        
                          <td>
                          <i class="material-icons mdc-button__icon" style="color: var(--button-primary-color);">edit</i>
                          <i class="material-icons mdc-button__icon" style="color: var(--button-danger-color);">delete</i>
                          <i class="material-icons mdc-button__icon" style="color: var(--button-success-color);">info</i>
                          </td>
                        
                        </tr>

                        <?php endforeach?>
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </main>
        