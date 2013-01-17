<input type="hidden" name="challenge1" value='<?php echo $_SERVER['REQUEST_TIME'] ?>' />
<input type="hidden" name="challenge2" value='<?php echo md5(session_id().$_SERVER['REQUEST_TIME']);?>' />

<input type="hidden" name="ref" value='<?php echo $sf_user->hasFlash('ref') ? $sf_user->getFlash('ref') : $sf_request->getReferer();?>' />
<input type="hidden" name="self" value="<?php echo $sf_request->getUri();?>" />