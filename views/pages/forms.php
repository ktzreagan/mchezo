        <form class="content-wrapper" action="./actions/action.php?__AUTH_ID__=<?php echo($_SESSION['SESSION_ID'])   ?>" method="post" enctype="multipart/form-data">        
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <h6 class="card-title">Item Basic Information</h6>
                  <div class="template-demo">
                    <div class="mdc-layout-grid__inner">
                    

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="item_name">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Item Title</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>


                      
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" name="item_price">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Item Price</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-6-desktop stretch-card">
                <div class="mdc-card">
                  <h6 class="card-title" id="imageTitle">Images</h6>
                  <div class="template-demo">


                    <div class="mdc-switch" data-mdc-auto-init="MDCSwitch">
                        <button id="addImageButton" class="mdc-button mdc-button--raised icon-button filled-button--warning mdc-ripple-upgraded" style="--mdc-ripple-fg-size:21px; --mdc-ripple-fg-scale:2.90056; --mdc-ripple-fg-translate-start:4.625px, 5.5px; --mdc-ripple-fg-translate-end:7.5px, 7.5px;">
                        <i class="material-icons mdc-button__icon">add</i>
                      </button>
                    </div>


                    <input type="file" name="item_images" id="chooseImageInput"  pattern="*.jpg"  multiple  hidden>


                  
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-6-desktop stretch-card">
                <div class="mdc-card">
                  <h6 class="card-title">Select Game Category</h6>
                  <div class="template-demo">
                    <div class="input-field" data-mdc-auto-init="MDCSelect">

                      <div class="input-field col s12">

                        <select name="item_category">

                          <option value="" disabled selected>Choose your option</option>

                          <option  value="1">Tables Games</option>

                          <option value="2">Puzzle Games</option>

                        </select>

                      </div>
                     
                      
                    </div>

      
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-12">


                <div class="mdc-card">

                  <h6 class="card-title">Item Description</h6>
                  <div class="template-demo">
                     

                      <textarea placeholder="Item Description..." name="item_desc" rows="12" style="width:100%;border:1 solid grey;font-style:inherit;border-radius:5px;padding:1%"></textarea>
                    

                  </div>

                  <div class="mdc-layout-grid__cell--span-8">

                  <br>


                  <button  name="save__item" type="submit" class="mdc-button mdc-button--raised mdc-ripple-upgraded pull-right" style="--mdc-ripple-fg-size:57px; --mdc-ripple-fg-scale:1.96776; --mdc-ripple-fg-translate-start:14.5px, -3.5px; --mdc-ripple-fg-translate-end:19.3047px, -10.5px;background-color:var(--theme-color)">
                      Submit
                    </button>

                  </div>

                  
                </div>

              </div>
            </div>
          </div>

      </form>