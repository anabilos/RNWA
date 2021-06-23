<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebFormKlijentApp.aspx.cs" Inherits="WebServisConvert.WebFormKlijentApp" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        Konverter<p>
            <asp:TextBox ID="TextBox1" runat="server" Height="19px" Width="145px"></asp:TextBox>
            <asp:Label ID="Labela" runat="server" Text=""></asp:Label>
        </p>
        <asp:Button ID="BAMtoEUR" runat="server" OnClick="BAMtoEUR_Click" Text="BAMtoEUR" />
        <asp:Button ID="EURtoBAM" runat="server" style="margin-left: 11px" Text="EURtoBAM" OnClick="EURtoBAM_Click" />
    </form>
</body>
</html>
