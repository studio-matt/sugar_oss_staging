<script type="text/javascript" src="modules/comite_Letters/js/letter.js"></script>
<h1>EHE Letter for {$CONTACT->full_name}</h1>

<div id="LetterSubject">
    <p class="control">This is the subject</p>
</div>

<div id="LetterBody">
<p>This is an EHE Letter</p>

</div>

<form name="letter" id="letter" method="post" action="index.php">
    <input type="hidden" name="module" value="comite_Letters" />
    <input type="hidden" name="action" value="send" />
    <input type="hidden" name="record" value="{$REQUEST.record}" />
    <input type="hidden" name="return_module" value="{$REQUEST.return_module}" />
    <input type="hidden" name="return_action" value="{$REQUEST.return_action}" />
    <input type="hidden" name="return_record" value="{$REQUEST.record}" />
    <input type="hidden" name="subject" id="subject" value="" />
    <input type="hidden" name="body" id="body" value="" />

    <input type="submit" value="Save Letter" />
</form>