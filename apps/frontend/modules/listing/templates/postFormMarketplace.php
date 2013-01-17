
<div class="clearfix">
    <h2 class="crumbs">
        <?php echo image_tag('module_listing') ?><span class='normal'><?php echo link_to1('Post a New Listing', 'listing/postForm'); ?></span>
        &raquo;
        <?php echo image_tag('module_marketplace'); ?>Sell & Buy Items
    </h2>

    <div class="home-content lfloat">
        <form id="postForm" action="<?php echo url_for('account/activate'); ?>"  method="post">
            <div class="form_section">
                <input type="hidden" name="data[catId]" id="catId" value="<?php echo $categoryId; ?>" />
                <h3 class="form_section_header">Category</h3>

                <p class="box-padding" id="catMsg" style="<?php echo ($categoryId > 0 && $categories[$categoryId]) ? '' : 'display:none;'; ?>">
                    You are posting a listing in <span class='bold' id="catName"><?php echo $categories[$categoryId]['name']; ?></span>
                    <a id="cat_change_link" style="display:none;" onclick="$('#cat_selector').show();return false;" href="<?php echo url_for('listing/postForm'); ?>" class="smaller natural"><sup>[Change]</sup></a>
                </p>


                <div id="cat_selector" class="rbox grey" style="<?php echo ($categoryId > 0 && $categories[$categoryId]) ? 'display:none;' : ''; ?>">
                    <div >
                        <div class="rbox_head"><b><i></i><?php echo image_tag('icon_delete', array('class' => 'close-btn', 'id' => 'cat_selector_close_btn', 'style' => ($categoryId > 0 ? '' : 'display:none'))); ?></b></div>
                    </div>
                    <div class="rbox_body">

                        <div class="content">
                            <div class="box-padding">
                                <p class="instruction">Please select a category:</p>
                                <ul class="float box-padding clearfix">

                                    <?php
                                    foreach ($categories as $cat) {
                                        echo '<li>' . link_to1($cat['name'], 'listing/postForm?m=' . Listing::MODULE_MARKETPLACE . '&c=' . $cat['id'], array('class' => 'cat_select_link', 'catId' => $cat['id'])) . '</li>';
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rbox_tail"><b><i></i></b></div>
                    </div>
                </div>
            </div>
            <div class="form_section" >
                <h3 class="form_section_header">Campus</h3>
                <p class="box-padding">
                    Is this listing related to a university/college/TAFE/institution ? <br />
                    <span class="form_hint">(For example, prescribed textbooks for a course and accommodation near a campus.)</span>
                    <a id="cat_change_link" style="display:none;" onclick="$('#cat_selector').show();return false;" href="<?php echo url_for('listing/postForm'); ?>" class="smaller natural"><sup>[Change]</sup></a>
                </p>
                <fieldset>
                    <div class="short">
                        <label for="campus">Campus:</label>
                    </div>
                    <div class="long field">
                        <input id="campus" style="width:350px;" name="data[campus]" value="" /><br/>
                        <span class='form_hint'>(Please type in institution full name or abbreviation)</span>
                    </div>
                </fieldset>
            </div>
            <div class="form_section" >
                <h3 class="form_section_header">Listing Detail</h3>

                <fieldset>
                    <div class="short">
                        <label for="name"><span class="error">*</span>Title: </label>
                    </div>
                    <div class="long field">
                        <input class="name-text" type="text" name="data[name]" id="name" style="width:350px" /> <br />
                        <span class='smaller name-counter'></span>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="short">
                        <label for="description"><span class="error">*</span>Description: </label>
                    </div>
                    <div class="long field">
                        <textarea name="data[description]" id="description"  rows="15" style="width:580px"></textarea>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="short">
                        <label for="description">Photos: </label>
                    </div>
                    <div class="long field">
                        <input type="button" id="upload_button" style="cursor: pointer;" value="Upload">
                        <span class='form_hint'>(Max 10 images, up to 4MB each. First uploaded image will be used as thumbnail.)</span>
                        <?php echo image_tag('icon_loader.gif', array('style'=>'display:none'));?>
                        
                        <ol id="files"></ol>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="short">
                        <label for="location"><span class="error">*</span>Item Location: </label>
                    </div>
                    <div class="long field">
                        <input id="location" style="width:200px;" name="data[location]" value="" /><br/>
                        <span class='form_hint'>(Please type in postcode or suburb)</span>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="short">
                        <label for="email"><span class="error">*</span>Email: </label>
                    </div>
                    <div class="long field">
                        <input id="email" style="width:200px;" name="data[email]" value="" /><br/>
                        <span class='form_hint'>(Your email is well protected. You will only be contacted via CampusCenter's email system)</span>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="short">
                        <label for="location">Contact:</label>
                    </div>
                    <div class="long field">
                        <input id="location" style="width:200px;" name="data[location]" value="" /><br/>
                        <span class='form_hint'>(Please enter contact person and/or phone number )</span>
                    </div>
                </fieldset>
                
            </div>
            <?php include_partial('partials/formChallenge'); ?>

                                </form>
                        
                            </div>
    <?php include_partial('postFormRightColumn'); ?>
</div>

<script type="text/javascript">
    $('#cat_change_link').show(); //cat change link

    $('.cat_select_link').each(function(){$(this).click(function(){$('#catId').val($(this).attr('catId'));$('#catName').html($(this).html());$('#catMsg').show();$('#catMsg').show();$('#cat_selector_close_btn').show();$(this).parents('.rbox').each(function(){$(this).hide()});return false;})});
    $(function()
    {
        $('#description').wysiwyg();
    });
    $('#postForm')
    .each(
        function() {
            var textTag = $('.name-text', this);
            var counterTag = $('.name-counter', this);
            var limit = 50;
            textTag
            .keyup( function() {
                var text = textTag.val();
                var textlength = text.length;
                if (textlength > limit) {
                    counterTag
                    .html('You cannot write more than ' + limit + ' characters!');
                    textTag.val(text.substr(0, limit));
                    counterTag.css('color', '#f00');
                    return false;
                } else {
                    counterTag
                    .html('You have ' + (limit - textlength) + ' characters left.');
                    counterTag.css('color', '#999');
                    return true;
                }
            });

        });
        $('#location').autocomplete("<?php echo url_for('api/locations'); ?>",{"matchContains":true, "max":15,"minChars":3});
        $('#campus').autocomplete("<?php echo url_for('api/campuses'); ?>",{"matchContains":true, "max":15,"minChars":3});

        $(function(){
	//counting upload time
	var count = $('#files').children('li').size();
	new AjaxUpload('upload_button', {
		action: '<?php echo url_for('listing/postFormImageUpload'); ?>',
		name: 'img',
		autoSubmit: true,
                data: {"hash":'<?php echo session_id(); ?>'},
		responseType: 'json',
		onChange: function(file, extension){},
		onSubmit: function(file, extension) {
			//set file permission
			if (! (extension && /^(jpg|png|jpeg|gif)$/.test(extension))){
				alert('Error: file extension not supported, please upload image in JPG, PNG, JPEG or GIF format.');
				return false;
			}
			// increment count
			count ++;
			// count submission
			if(count > 10){
				alert('Maximum of 10 image per listing');
				return false;
			}
			// showing loader
			var li = $('#files').children('li').size();
			if(count > li ){
				$('#loader').show();
			}
		},
		onComplete: function(file, response) {
			// add delete link
			if(response.status == 'success') {
				var list_item = '<li><img src="/pic/'+ response.thumb_name +'" />';
					list_item += '<span>'+ file +'</span>';
					list_item += '<a href="#" class="del">remove</a></li>';
				$('#files').append(list_item);
			}
			else{
				count--;
				alert(response.errors +' ' + file);
			}
			// remove the loader
			var li = $('#files').children('li').size();
			if(count == li){
				$('#loader').hide();
			}

			// if clicked, remove image completely
			$('.del').click(function(e){
				e.preventDefault();
				$.post('http://www.diepbachduong.com/index.php/play/img/del',
						{ori: response.img_name , thumb: response.thumb_name },
						function(){}, 'json');
				$(this).parent().remove();
				count --;
			});
		}
	});

});

</script>