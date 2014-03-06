<?php 
echo __('Menu');

echo $this->Form->create('Content',array('type'=>'file','multiple'));

echo $this->Form->input('files',array('type'=>'file','multiple','class'=>'mult','id'=>'upload-file')); 

	
?>
<div id="lista">
</div>
<?php echo $this->Form->end(__('Submit'));		 ?> 


<script type="text/javascript">


fileuploadbutton = document.getElementById('upload-file');
lista = document.getElementById('lista');

fileuploadbutton.addEventListener('change', function(e) {
    e.preventDefault();

    var files = [].slice.call(this.files);
    files.forEach(function(file,i) {

        var li = document.createElement('li'),
            a = document.createElement('a');
        a.file = file;
        a.href = '#';
        a.target = '_blank';
        a.name = 'data[Content][files][]';
        a.textContent = file.name;
        //a.addEventListener('click', openFile);
        li.appendChild(a);
        lista.appendChild(li);
    });

});
</script>