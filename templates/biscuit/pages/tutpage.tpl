{extends file="biscuit/_inc/master.tpl"}
{block name=head}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/github-markdown-css/2.6.0/github-markdown.css"/>
{/block}

{block name=body}
    <div class="row">
        <div class="col-sm-3 hidden-xs">
            <h3>Tutorials</h3>
            <ul class="nav nav-pills nav-stacked" id="docs-nav" role="menu" data-activepage="{$page_id}">             
                <li data-page="index">
                    <a href="/tutorials/start-learning">Start Learning</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9 col-xs-12 markdown-body">
            {$markdown_page}
        </div>
    </div>
{/block}

{block name=js}
    <script type="text/javascript">
        // Set the correct item in the nav bar to be active
        $(document).ready(function ()
        {
            var docsNav = $('#docs-nav');
            var activePage = docsNav.data('activepage');
            var navPages = docsNav.find('li');
            for (var i = 0; i < navPages.length; i++)
            {
                var curPage = $(navPages[i]);
                if (activePage === curPage.data('page'))
                {
                    curPage.addClass('active');
                    break;
                }
            }
        });
    </script>
{/block}