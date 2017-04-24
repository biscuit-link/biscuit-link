{extends file="biscuit/_inc/master.tpl"}
{block name=head}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/github-markdown-css/2.6.0/github-markdown.css"/>
{/block}

{block name=body}
    <div class="row">
        <div class="col-sm-3 hidden-xs">
            <h4>Documentation</h4>
            <ul role="menu">
                <li>
                    <a href="/docs">Getting Started</a>
                </li>
                <li>
                    <a href="/docs/folder-structure">Folder Structure</a>
                </li>
                <li>
                    <a href="/docs/templates">Templates</a>
                </li>
                <li>
                    <a href="/docs/elements">Elements</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9 col-xs-12 markdown-body">
            {$markdown_page}
        </div>
    </div>
{/block}

{block name=js}{/block}