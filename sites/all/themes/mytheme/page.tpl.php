
  <div class="container"> <!-- start main container -->
      


    

  <div id="page">
    <?php if ($secondary_local_tasks): ?>
      <div class="tabs-secondary clearfix"><?php print render($secondary_local_tasks); ?></div>
    <?php endif; ?>

    <div id="content" class="clearfix">
      <div class="element-invisible"><a id="main-content"></a></div>
      <?php if ($messages): ?>
        <div id="console" class="clearfix"><?php print $messages; ?></div>
      <?php endif; ?>
      <?php if ($page['help']): ?>
        <div id="help">
          <?php print render($page['help']); ?>
        </div>
      <?php endif; ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      </div>
        
       
                
        <?php if ($page['header']): ?>
        <div class="header">
          <?php print render($page['header']); ?>
        </div>
      <?php endif; ?>
        
      <div class="cleardiv"></div>
    <div class="title-area">
    
        <div class="cleardiv"></div>
    
    
      
    <?php print $breadcrumb; ?>
    
  </div>
      
       <!-- Method to detect if page has sidebar or not and print a different size div --> 
        
             <?php if (!empty($page['sidebar'])): ?>
              <div class="container-sidebar">
              <?php else: ?>
            <div class="container-main"> 
          <?php endif; ?> 
                 <!-- end Method --> 
                
                <?php print render($primary_local_tasks); ?> 
                <div class="cleardiv"></div>
                
                <?php if ($title): ?>
      <h1 class="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
                
      <?php print render($page['content']); ?>
          </div> <!--method for sidebar -->      
                
                
                
       
                  
                  
         <!-- Start IF sidebar-right -->
<?php if (!empty($page['sidebar'])): ?> 
              <div class="sidebar-content">
              <?php print render($page['sidebar']); ?>
              </div>
               <?php endif; ?>
             <!-- End IF sidebar-right -->  

                  <div class="cleardiv"></div>
    <div class="footer">
      <?php print render($page['footer']); ?>
    </div>
        
        </div> <!-- end page id div -->  
  </div> <!--end main container -->
 
