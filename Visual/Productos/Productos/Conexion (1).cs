/*
 * Created by SharpDevelop.
 * User: Usuario
 * Date: 5/13/2018
 * Time: 4:03 PM
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
using System;
using System.Data.SQLite;
using System.Data;

namespace Productos
{
	/// <summary>
	/// Description of Conexion.
	/// </summary>
public class Conexion
	{
		SQLiteConnection conn;
		SQLiteDataAdapter recordset;
		DataSet setData;
		
		public Conexion(string dbname, string path)
		{
			AppDomain.CurrentDomain.SetData("DataDirectory", path);
			conn = new SQLiteConnection("Data Source=|DataDirectory|\\" + dbname);
			conn.Open();
		}
		
		public void ejecutarConsultaSQL(string sql){
			recordset = new SQLiteDataAdapter(sql, this.conn);
			llenarDataset();
		}
		
		public void llenarDataset(){
            setData = new DataSet();
            recordset.Fill(setData);
        }
		
		public DataSet getDataSet(){
            return setData;
        }
		
		
	}
}
