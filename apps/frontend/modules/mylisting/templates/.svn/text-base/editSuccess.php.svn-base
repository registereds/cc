

<div class="clearfix">

    <?php
    include_partial('my/myTabNav', array('currentTab' => 'listing'));
    ?>

    <div class="publock-content">

        <h3 class="form_section_header">Edit Listing:</h3>
        <form  id="editForm" action="<?php echo url_for('my/updateListing'); ?>"  method="post">
            <div class="form_section" >               
                <fieldset>
                    <div  class="label2">
                        <label for="name"><span class="error">*</span>Title: </label>
                    </div>
                    <div class="field">
                        <p class="listing_title"><?php echo $listing->getName(); ?></p>                        
                    </div>
                </fieldset>
                <fieldset>
                    <div  class="label2">
                        <label for="description"><span class="error">*</span>Description: </label>
                    </div>
                    <div class="field">
                        <textarea name="description" id="description"  rows="20" cols="100"><?php echo $listing->getDescription(); ?></textarea>

                        <?php if (isset($errors['description'])) {
                        ?>
                            <label class="error" generated="false"  for="description"><?php echo $errors['description']; ?></label>
                        <?php } ?>
                    </div>


                </fieldset>

            </div>
            <?php include_partial('partials/formChallenge'); ?>
            <div class='submit'>
                <input name="id" type="hidden" value="<?php echo $listing->getId();?>" />
                <input name="save" class='action-button' type="submit" value="Save Change" />
                <input name="cancel" class='action-button' type="submit"  value="Cancel" />
            </div>
        </form>

    </div>





</div>
<script type="text/javascript">
    $(function()
    {
        $('#description').wysiwyg();
    });
</script>