{extends file="biscuit/_inc/master.tpl"}
{assign var="page_title" value="Biscuit Link - Not Found"}
{block name=head}{/block}

{block name=body}
    <h1>Biscuit Link</h1>
    <h2>Not Found!</h2>

{literal}
    <script type="text/javascript">
        setTimeout(function()
        {
            window.location = '/';
        }, 4000);
    </script>
{/literal}
{/block}
{block name=js}{/block}