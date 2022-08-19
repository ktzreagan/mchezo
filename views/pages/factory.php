
<?php
$categories = DB::select("SELECT * FROM categories");
$quantities = DB::select("SELECT * FROM quantities");
?>      
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                <div class="mdc-card  card-padding " style="display:flex;flex-direction:row;justify-content:space-between;">
                  <h4 class="card-title ">Currencies</h3>
                  
                  <button class="mdc-button mdc-button--raised icon-button filled-button--success">
                        <i class="material-icons mdc-button__icon">add</i>
                    </button>
                  </div>  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-left">Currency Id</th>
                          <th>Currency Name</th>
                          <th>Currency Value</th>
                          <th></th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-left">Dollar</td>
                          <td>1.59</td>
                          <td>6.0</td>
                          <td>
                          <i class="material-icons mdc-button__icon" style="color: var(--button-primary-color);">edit</i>
                          <i class="material-icons mdc-button__icon" style="color: var(--button-danger-color);">delete</i>
                            
                    
                        </td>                        
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                <div class="mdc-card  card-padding " style="display:flex;flex-direction:row;justify-content:space-between;">
                  <h4 class="card-title ">Categories</h3>
                  
                  <button class="mdc-button mdc-button--raised icon-button filled-button--success">
                        <i class="material-icons mdc-button__icon">add</i>
                      </button>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hoverable">
                      <thead>
                        <tr>
                          <th class="text-left">Category Id</th>
                          <th>Category Name</th>
                          <th>Category Description</th>
                          <th>Date</th>
                
                          <th></th>
                          
                        </tr>
                      </thead>
                      <tbody>


                     
                      <?php foreach($categories as $category): ?>
                        <tr>
                          <td class="text-left text-primary">#<?php echo($category['id'])  ?></td>
                          <td><?php echo($category['category_name'])  ?></td>
                          <td><?php echo($category['description'])  ?></td>
                          <td><?php echo($category['created_at'])  ?></td>
                      
                      
                          <td>

                          <i class="material-icons mdc-button__icon" style="color: var(--button-primary-color);">edit</i>
                          <i class="material-icons mdc-button__icon" style="color: var(--button-danger-color);">delete</i>
                            
                        </td>
                          
                        </tr>

                        <?php endforeach ?>

                        


                   </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                <div class="mdc-card  card-padding " style="display:flex;flex-direction:row;justify-content:space-between;">
                  <h4 class="card-title ">Quantities</h3>
                  
                  <button class="mdc-button mdc-button--raised icon-button filled-button--success">
                        <i class="material-icons mdc-button__icon">add</i>
                      </button>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hoverable">
                      <thead>
                        <tr>
                          <th class="text-left">Quantity Id</th>
                          <th>Quantity Name</th>
                          <th>Quantity Description</th>
                          <th>Creation Date</th>
                
  
        

                          
                        </tr>
                      </thead>
                      <tbody>


                      <?php foreach($quantities as $quantity):?>
                        <tr>
                          <td class="text-left text-primary" >#<?php echo($quantity['id']) ?></td>
                          <td><?php echo($quantity['quantity_name']) ?></td>
                          
                          <td ><?php echo($quantity['quantity_description']) ?></td>

                          <td><?php echo($quantity['created_at']) ?></td>
                          
                          
                      
                          <td>

                          <i class="material-icons mdc-button__icon" style="color: var(--button-primary-color);">edit</i>
                          <i class="material-icons mdc-button__icon" style="color: var(--button-danger-color);">delete</i>
                            
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
        