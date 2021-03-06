<?php $this->layout = Configure::read('Site.layout'); ?>
<?php $this->set("title_for_layout","Add an article"); ?>

<div class='centered'><h1 style="margin-bottom: 20px;">Publish an article</h1></div>

<?php

echo $this->Form->create('Post', array(
	'class' => 'form', 
	'inputDefaults' => array(
	    'div' => 'control-group',
	    'label' => false,
	    'between' => '<div class="controls">',
	    'after' => '</div>',
	    'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
) ));

echo $this->Form->input('title',array(
	'style' => 'width:490px', 
	'before' => '<span class = \'control-label\'>Title</span>'));
	
echo $this->Form->input('body',array(
	'style' => 'width:490px;font-family: Menlo, Monaco, Courier New, monospace;',
	'rows' => '20', 
	'placeholder' => 'You can use HTML or Markdown syntax',
	'before' => '<span class = \'control-label\'>Content</span>'));
	
echo $this->Form->input('format', array(
    'options' => array('standard' => 'Standard post', 'link' => 'Link post', 'status' => 'Status post', 'image' => 'Image post')));
    
echo ("<div class='form-actions'>");
	
echo ("<input type='submit' class='btn' value='Publish'>"); ?>

<a class="btn btn-danger" href="<?php echo $this->Html->url('/'); ?>">Cancel</a>

</div>