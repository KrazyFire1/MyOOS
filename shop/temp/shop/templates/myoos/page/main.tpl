{include file="myoos/system/_header.tpl"}

    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td>{$oosPageHeading}</td>
      </tr>
      <tr>
        <td height="10"></td>
      </tr>
      <tr>
        <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
{if $customer_greeting}
         <tr>
           <td class="main">{$customer_greeting}</td>
         </tr>
{/if}
          <tr>
            <td class="main"><br>{$lang.text_main}</td>
          </tr>
{$new_spezials}
{$featured}
{$new_products}
{$upcoming_products}


        </table></td>
      </tr>
    </table>

{include file="myoos/system/_footer.tpl"}