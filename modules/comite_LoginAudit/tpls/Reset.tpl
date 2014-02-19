<h1>Reset User's Access</h1>

<p>Select a user from the list below and click reset to reset their access to the site.</p>

{if $flash }
<strong class="success">{$flash}</strong>
{/if}

<form method="post" action="index.php?module=comite_LoginAudit&action=Reset">
<select name="user">
{foreach from=$users item=user key=key}
    <option value="{$user.id}">{$user.last_name}, {$user.first_name} ({$user.user_name})</option>
{/foreach}
</select>
<input type="submit" value="Reset Access" />
</form>
