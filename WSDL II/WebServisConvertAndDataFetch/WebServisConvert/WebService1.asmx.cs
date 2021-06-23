using System.Web.Services;
using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using MySql.Data;
using System.Data;

namespace WebServisConvert
{
    /// <summary>
    /// Summary description for WebService1
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line. 
    // [System.Web.Script.Services.ScriptService]
    public class WebService1 : System.Web.Services.WebService
    {

     
        [WebMethod]
        public double konverzijaBAMToEUR(double a)
        {
            return  a* 0.51; 
        }
        [WebMethod]
        public double konverzijaEURToBAM(double a)
        {
            return a * 1.96;
        }
        [System.Web.Services.WebMethod]
        public DataTable getBuilding(int id)
        {
            string connString = "SERVER=localhost" + ";" +
                "DATABASE=fido;" +
                "UID=root;" +
                "PASSWORD=;";

            MySqlConnection cnMySQL = new MySqlConnection(connString);

            MySqlCommand cmdMySQL = cnMySQL.CreateCommand();

            MySqlDataReader reader;

            cmdMySQL.CommandText = "select * from building where number='" + id + "'";

            cnMySQL.Open();

            reader = cmdMySQL.ExecuteReader();

            DataTable dt = new DataTable();
            dt.Load(reader);


            cnMySQL.Close();

            return dt;
        }
    }
}

