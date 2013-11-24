


   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Quiz app</a>

        </div>
        <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">

                <?php foreach ($this->menuItems as $menuitem): ?>
                    <li class="<?php echo ($menuitem['link'] == getCurrentPath()) ? 'active' : ''; ?>"><a href="<?php echo baseUrl(); ?><?php echo $menuitem['link']; ?>"><?php echo $menuitem['description']; ?></a></li>
                <?php endforeach; ?>
          </ul>
          <form class="navbar-form navbar-right" method="post" action="player/logIn">
            <div class="form-group">
              <input id="email "type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
    </div>


