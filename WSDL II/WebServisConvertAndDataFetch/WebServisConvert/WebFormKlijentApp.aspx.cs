using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace WebServisConvert
{
    public partial class WebFormKlijentApp : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void EURtoBAM_Click(object sender, EventArgs e)
        {
            System.Net.ServicePointManager.ServerCertificateValidationCallback += delegate { return true; };
            KlijentAplikacija.WebService1SoapClient klijent = new KlijentAplikacija.WebService1SoapClient("WebService1Soap");
            double broj = double.Parse(TextBox1.Text);
            double rezultat = klijent.konverzijaEURToBAM(broj);
            Labela.Text = "Rezultat je: " + rezultat + " KM";

        }

        protected void BAMtoEUR_Click(object sender, EventArgs e)
        {
            System.Net.ServicePointManager.ServerCertificateValidationCallback += delegate { return true; };
            KlijentAplikacija.WebService1SoapClient klijent = new KlijentAplikacija.WebService1SoapClient("WebService1Soap");
            double broj = double.Parse(TextBox1.Text);
            double rezultat = klijent.konverzijaBAMToEUR(broj);
            Labela.Text = "Rezultat je: " + rezultat + " EUR";
        }
    }
}