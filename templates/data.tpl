{include file='head.tpl' jsIncludes=["jquery", "data", "tiptip","modernizr"] pageTitle="Data - CCAFS Climate" pageDescription="High resolution climate change data for download, downscaled using different methods." keywords="IPCC,data,download,downscaling,high resolution,delta method,climate change,projections,MarkSim,MetOffice,PRECIS"}
{include file='header.tpl' current="data"}
<div id="subheader-image">
    <img src="{$smarty.const.SMARTY_IMG_URI}/ribbon_header_data.gif" />
</div>
<div id="content" class="data2">
    <h3>Data</h3>
    <hr>
    <br>

    <div id="search_form">
        <div id="side-left"> 
            <section class="ac-container">
                <div>
                    <div class="inputs-ac">
                    <input id="ac-1" name="accordion-1" type="radio" checked />
                    <label for="ac-1">File Set</label>
                    </div>
                    <article class="ac-large">
                         
                        {$isFirst = true}
                        {foreach from=$fileSets item=fileSet}                            
                            <input id="fileSet-{$fileSet['id']}" class="fileset" type="radio" name="fileSet" value="{$fileSet['id']}" {if $isFirst}checked{/if}/><label for="fileSet-{$fileSet['id']}">{$fileSet["name"]}</label><br>
                            {$isFirst = false}
                        {/foreach}
                         
                    </article>
                </div>
                <div>
                    <div class="inputs-ac">
                    <input id="ac-2" name="accordion-1" type="radio" />
                    <label for="ac-2">Scenario</label>
                    </div>
                    <article class="ac-large">
                        <p>Some content... </p>
                    </article>
                </div>
                <div>
                    <div class="inputs-ac">
                    <input id="ac-3" name="accordion-1" type="radio"  />
                    <label for="ac-3">Model</label>
                    </div>
                    <article class="ac-large">
                        <p>Some content... </p>
                    </article>
                </div>
            </section>
        </div>
        <div id="side-right"> 
            <div id="side-right-top">
            </div>
            <div id="side-right-bottom">
            </div>
        </div>
    </div>

    <p>
        The data distributed here are in ARC GRID, and ARC ASCII format, in decimal degrees and datum WGS84. CCAFS and its partners have processed this data to provide seamless continuous future climate surfaces.
        Users are prohibited from any commercial, non-free resale, or redistribution without explicit written permission from CCAFS or the data-developing institutions.
        Users should acknowledge CCAFS as the source used in the creation of any reports, publications, new data sets, derived products, or services resulting from the use of this data set.
        For commercial access to the data, send requests to <a href="mailto:a.jarvis@cgiar.org">Andy Jarvis</a> at the International Center for Tropical Agriculture (CIAT).
    </p>

</div>

{include file='footer.tpl'}