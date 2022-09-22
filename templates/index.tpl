<h1>hh</h1>
{$articleTitle}<br/>
{$articleTitle|capitalize}<br/>
{$articleTitle|capitalize:true}<br/>
      {*Variable modifier/cat*}
{$Title|cat:' yesterday.'}<br/>
       {*Count character*}
{$articleTitle|count_characters}<br/>
{$articleTitle|count_characters:true}<br/>
        {*Count sentences*}
{$Title|count_sentences}<br/>
        {*Count words*}
{$articleTitle|count_words}<br/>
       {*Data Format*}
{$smarty.now|date_format}<br/>
{$smarty.now|date_format:"%D"}<br/>
{$smarty.now|date_format:$config.date}<br/>
{$yesterday|date_format}<br/>
{$yesterday|date_format:"%A, %B %e, %Y"}<br/>
{$yesterday|date_format:$config.time}<br/>
        {*Default*}
{$articleTitle|default:'no title'}<br/>
{$myTitle|default:'no title'}<br/>
{$email|default:'No email address available'}<br/>  
              
{$articleTitle|escape}<br/>
{$articleTitle|escape:'html'}    {* escapes  & " ' < > *}<br/>
<a href="?title={$aTitle|escape:'url'}">click here</a><br/>
<a href="?title=%27Stiff%20Opposition%20Expected%20to%20Casketless%20Funeral%20Plan%27">click here</a><br/>

{$aTitle|escape:'quotes'}<br/>

<a href="mailto:{$Address|escape:"hex"}">{$Address|escape:"hexentity"}</a><br/>
{$Address|escape:'mail'}    {* this converts to email to text *}<br/>
<a href="mailto:%62%6f%..snip..%65%74">&#x62;&#x6f;&#x62..snip..&#x65;&#x74;</a><br/>

{'mail@example.com'|escape:'mail'}<br/>

                {*indent*}

{$TitleA}<br/>

{$TitleA|indent}<br/>

{$TitleA|indent:20}<br/>

{$TitleA|indent:1:"\t"}<br/>
 
{$articleTitle|lower}<br/>
{$articleTitle|nl2br}<br/>
{$articleTitle|regex_replace:"/[\r\t\n]/":" "}<br/>
{$articleTitle|replace:'Will':'is'}<br/>
{$articleTitle|spacify:"^^"}
                 {*comining modifier*}

{$modifier}<br/>
{$modifier|upper|spacify}<br/>
{$modifier|lower|spacify|truncate}<br/>
{$modifier|lower|truncate:30|spacify}<br/>
{$modifier|lower|spacify|truncate:30:". . ."}<br/>

                     {*Build In Function*}

{append var='name' value='Bob' index='first'}
{append var='name' value='singh' index='last'}
The first name is {$name.first}.<br>
The last name is {$name.last}.

{*assign var="name" value="Bob"*}
{assign "name" "Apply"} {* short-hand *}
The value of $name is {$name}.
{assign var=foo value="bar" scope="root"}
The value of $foo is {$foo}

{* define the function *}
{function name=menu level=0}
  <ul class="level{$level}">
  {foreach $data as $entry}
    {if is_array($entry)}
      <li>{$entry@key}</li>
      {call name=menu data=$entry level=$level+1}
    {else}
      <li>{$entry}</li>
    {/if}
  {/foreach}
  </ul>
{/function}

{* create an array to demonstrate *}
{$menu = ['item1','item2','item3' => ['item3-1','item3-2','item3-3' =>
['item3-3-1','item3-3-2']],'item4']}

{* run the array through the function *}
{call name=menu data=$menu}


{capture append="foo"}hello{/capture}I say just {capture append="foo"}world{/capture}
{foreach $foo as $text}{$text} {/foreach}

{*********************config_load "example.conf"}  {* short-hand *}

@<body bgcolor="{#bodyBgColor#}">
@<table border="{#tableBorderSize#}" bgcolor="{#tableBgColor#}">
@   <tr bgcolor="{#rowBgColor#}">
@     <td>First</td>
@      <td>Last</td>
@      <td>Address</td>
@   </tr>
@</table>
*************************}

                  {*loop*}

<ul>
{for $foo=1 to 3}
    <li>{$foo}</li>
{/for}
</ul>


<ul>
{for $foo=3 to $to max=3}
    <li>{$foo}</li>
{/for}
</ul>

<ul>
{foreach $myPeople as $value}
   <li>{$value@key}: {$value}</li>
{/foreach}
</ul>

{*********************
@{foreach $res as $r} 
@  {$r.id} 
@  {$r.name}
@{foreachelse}
@  .. no results .. 
@{/foreach}
**********************}


{$data = [1,2,3,4,5]}
  {foreach $data as $value}
    {if $value == 3}
      {* skip this iteration *}
      {continue}
    {/if}
    {$value}
  {/foreach}

  {function menu level=0}          {* short-hand *}
  <ul class="level{$level}">
  {foreach $data as $entry}
    {if is_array($entry)}
      <li>{$entry@key}</li>
      {menu data=$entry level=$level+1}
    {else}
      <li>{$entry}</li>
    {/if}
  {/foreach}
  </ul>
{/function}

{* create an array to demonstrate *}
{$menu = ['item1','item2','item3' => ['item3-1','item3-2','item3-3' =>
['item3-3-1','item3-3-2']],'item4']}

{* run the array through the function *}
{menu data=$menu}

  {if $name eq 'Fred'}
    Welcome Sir.
{elseif $name eq 'Wilma'}
    Welcome Ma'am.
{else}
    Welcome, whatever you are.
{/if}


{*insert "getBanner" lid=#banner_location_id# sid=#site_id#}*}


<script language="JavaScript" type="text/javascript">
    function myJsFunction(){ldelim}
        alert("The server name\n{$smarty.server.SERVER_NAME}\n{$smarty.server.SERVER_ADDR}");
    {rdelim}
</script>

Today's date is
{nocache}
{$smarty.now|date_format}
{/nocache}


<table>
  <tr>
    <th>index</th><th>id</th>
    <th>index_prev</th><th>prev_id</th>
    <th>index_next</th><th>next_id</th>
  </tr>
{section name=row loop=$rows}
  <tr>
    <td>{$smarty.section.row.index}</td><td>{$rows[row]}</td>
    <td>{$smarty.section.row.index_prev}</td><td>{$rows[row.index_prev]}</td>
    <td>{$smarty.section.row.index_next}</td><td>{$rows[row.index_next]}</td>
  </tr>
{/section}
</table>

   {*Custom FUnction*}


{* initialize the count *}
{counter start=0 skip=2}<br />
{counter}<br />
{counter}<br />
{counter}<br/>

 {eval var=$foo}
 
 {html_checkboxes name='id' options=$cust_checkboxes
   selected=$customer_id separator='<br />'}

  

{html_options name='id' options=$cust selected=$customer_id }

{html_options name=foo options=$lookups selected=$fav}

{*$startDate|date_format*}
