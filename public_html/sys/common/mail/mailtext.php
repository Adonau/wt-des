<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
?>
<?php $time = date('d.m.Y H:i:s'); ?>

<?php
print
  '<table style="
  width:100%;
  background-color: #060606;
  ">
  <tbody>
  <tr>
  <td align="center">
  <table style="width:100%;max-width:720px;table-layout:fixed;word-wrap:break-word;" border="0" cellspacing="0" cellpadding="0">
  <tbody>
  <tr>
    <td colspan="1" bgcolor="#121011" width="40px" height="40px">&nbsp;</td>
    <td colspan="1" bgcolor="#121011" width="320px" height="40px">&nbsp;</td>
    <td colspan="1" bgcolor="#261B13" width="320px" height="40px">&nbsp;</td>
    <td colspan="1" bgcolor="#261B13" width="40px" height="40px">&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="1" bgcolor="#261B13" width="40px">&nbsp;</td>
    <td colspan="2" align="center">
      <table style="width:100%;max-width:680px;table-layout:fixed;word-wrap:break-word;" border="0" cellspacing="0" cellpadding="20">
        <tbody>
          <tr>
            <td align="center">
              <span style="color:#5E4D3D;font-size:20pt;">
                Новое сообщение!
              </span>
              <p style="font-family:Arial;color:#593f30;font-weight:400;line-height:24px;font-size:14pt;margin-top:5px;margin-bottom:20px;">
              Дата поступления: <span style="font-family:Arial;font-weight:400;line-height:16px;font-size:14pt;">' . $time . '</span></p>                      
              <table style="border: 1px solid #261B13; background-color:#0B0B0D; width: 90%;">
                <tbody>
                  <tr style="background-color:#121011; padding: 10px 30px; height: 40px; border: 1px solid #261B13; color: #593f30; font-size: 18px;">
                    <th>Имя отправителя</th>
                    <th>' . $mesform['namemes'] . '</th>
                  </tr>
                  <tr style="background-color:#121011; padding: 10px 30px; height: 40px; border: 1px solid #261B13; color: #593f30; font-size: 18px;">
                    <th>Почта отправителя</th>
                    <th>' . $mesform['mailmes'] . '</th>
                  </tr>
                  <tr style="background-color:#121011; padding: 10px 30px; height: 40px; border: 1px solid #261B13; color: #593f30; font-size: 18px;">
                    <th>Текст</th>
                    <th>' . $mesform['textmes'] . '</th>
                  </tr>
                </tbody>
              </table> 
  
            </td>
          </tr>
        </tbody>
      </table>
    </td>
    <td colspan="1" bgcolor="#261B13" width="40px">&nbsp;</td>  
  </tr>
  
  <tr>
  </tr>
  <tr>
    <td colspan="1" bgcolor="#121011" width="40px" height="40px">&nbsp;</td>
    <td colspan="1" bgcolor="#121011" width="320px" height="40px">&nbsp;</td>
    <td colspan="1" bgcolor="#261B13" width="320px" height="40px">&nbsp;</td>
    <td colspan="1" bgcolor="#261B13" width="40px" height="40px">&nbsp;</td>
  </tr>
  
  </tbody> 
  </table> 
  </td>
  </tr> 
  </tbody>
  </table>';
?>