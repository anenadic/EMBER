<!-- redirect if cookie is not set -->
<script language="JavaScript" type="text/JavaScript">
var page = document.location.href;
if(page.indexOf('login.php') == -1 && (page.indexOf('newuser.php') == -1) && getCookie('username') == null) document.location.href = 'login.php';
</script>
<div id="Notepad" style="position:absolute; left:260px; top:0px; width:450px; z-index:8; background-image: url(Graphics/notepad.gif); layer-background-image: url(Graphics/notepad.gif); border:thin solid black; border-style:solid; border-width:1; border-color: black; overflow: visible; scrollbar-base-color: #D6E8F3; visibility: hidden"> 
 <div align="center"> 
      <table border="0" cellspacing="0" cellpadding="0">
       <tr> 
        
    <td> <img src="Graphics/spacer.gif" height="15" width="1"></td>
       </tr> 
       <tr> 
        <td>
     <div align="right">
         <form name="notepadform">
          <p>  <textarea name="notes" wrap="VIRTUAL" cols="47" rows="15" class="dnasequence"></textarea>
         
          </p>
           
       <p> 
         <input type="button" class="formbutton" name="hidenotepad2" value="Hide Notepad" onClick="closeNotepad();" onMouseOver="this.style.cursor='pointer'; this.style.background='white'; this.style.color='#990000';" onMouseOut="this.style.cursor='default'; this.style.background='#D5E1ED'; this.style.color='#000060';">
              </p>
            </form>

				  </div></td>
              </tr>
            </table>
  </div>
</div>