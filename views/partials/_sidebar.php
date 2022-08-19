<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open" >
      <div class="mdc-drawer__header">
        <a href="./" class="brand-logo">
          <h5 class="text-light text-align-center"><i class="material-icons text-warning">games</i>
    MChezo Admin</h5>
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info">

          <?php if(isset($_SESSION['user_info'])): ?>
          <p class="name"><?php echo($_SESSION["user_info"]['full_name']) ?></p>
          <p class="email"><?php echo($_SESSION["user_info"]['email']) ?></p>
          <?php endif ?>
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="./home">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Dashboard
              </a>
            </div>
            <!-- <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="./forms">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                Forms
              </a>
            </div> -->

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-item-submenu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">games</i>
                Games
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-item-submenu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="./items">
                      Available Games
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="./forms">
                      Add Game
                    </a>
                  </div>
                </nav>
              </div>
            </div>




            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-check-submenu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">shop</i>
                Transactions
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-check-submenu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="./transactions">
                      Checkouts
                    </a>
                  </div>
                  
                </nav>
              </div>
            </div>






            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">settings</i>
                Item Settings
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="./factory">
                      Factory
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="pages/ui-features/typography.html">
                      Typography
                    </a>
                  </div>
                </nav>
              </div>
            </div>


            <!-- <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="pages/tables/basic-tables.html">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                Tables
              </a>
            </div> -->

            



            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-charts-sub-menu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pie_chart_outlined</i>
                Stattistics
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-charts-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="./charts">
                      Charts
                    </a>
                  </div>
      
                </nav>
              </div>
            </div>

            <!-- <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="./charts">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pie_chart_outlined</i>
                Charts
              </a>
            </div> -->


          </nav>
        </div>
        <div class="profile-actions">
          <a href="javascript:;">Settings</a>
          <span class="divider"></span>
          <a href="javascript:;" class="logout-link">Logout</a>
        </div>

      </div>
    </aside>