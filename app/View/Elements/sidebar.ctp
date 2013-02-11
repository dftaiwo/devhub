<?php
/**
  Filename: sidebar.ctp
  @author: Femi TAIWO [dftaiwo@gmail.com]
  Created: Feb 8, 2013  7:54:22 AM
 */
?>
<div class="well welcome">
        <h1>Welcome!</h1>
        <p>
                <span class="smaller">
                        <strong><?php echo Configure::read('Application.name'); ?></strong> is a community-driven platform for developers, tech-entrepreneurs &amp; enthusiasts. <?php echo $this->Html->link('learn more &raquo;','#',array('escape'=>false)); ?>
                </span>
        </p>
        <p>
                <strong>Mailing List</strong>
                <br />
                <span class="smaller">You can follow our <?php echo $this->Html->link("G+ Page","https://plus.google.com/".Configure::read('Application.gplus_page_id'),array('class'=>'maroon')); ?> below or enter your email address to join the mailing list and get updates on events, tools, apis and useful links</span>
        <form action="" target="_blank">
                <label for="subscribeEmail"></label> <input placeholder="Your Email Address" id="subscribeEmail" type=email name=email required>
                <input type=submit name="sub" value="Subscribe" class="btn btn-primary">
        </form>
</p>
</div>
<div id="gplusActivities" class="bordered">
        <div class="center">
<g:plus href="https://plus.google.com/<?php echo Configure::read('Application.gplus_page_id'); ?>" ></g:plus>
        </div>
<?php if (isset($gplusActivity) && $gplusActivity){ ?>
        <ul>
<?php
$limit = 8;
$a=0;
foreach($gplusActivity as $row){
        if($a>$limit) break;
        $a++;
?>
                <li>
                        <?php echo $this->Html->link($row['title'],$row['link'],array('target'=>'_blank')); ?> <span><?php echo $row['date'];?></span>
                </li>
                <?php } ?>
        </ul>
        <?php echo $this->Html->link("Visit Google+ Page","https://plus.google.com/".Configure::read('Application.gplus_page_id'),array('class'=>'maroon')); ?>
<?php } ?>
</div>
