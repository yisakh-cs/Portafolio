/*
 * Created by SharpDevelop.
 * User: Usuario
 * Date: 5/13/2018
 * Time: 4:07 PM
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
using System;
using System.Windows.Forms;
using System.Drawing;

namespace Productos
{
	/// <summary>
	/// Description of Global.
	/// </summary>
	public class Global
	{
		public Global()
		{
		}
		
		public void llenarListView(Conexion conn, System.Windows.Forms.ListView listView , String consulta)
        {
            /*Se encarga de forma general de tomar los datos por medio de consultas y mostrarlos en 
            el componente listview.*/

            try
            {
                int x = 0;
                int y = 0;

                conn.ejecutarConsultaSQL(consulta);
                listView.Clear();

                if (conn.getDataSet().Tables.Count != 0)
                {
                    while (y < conn.getDataSet().Tables[0].Rows.Count)
                    {
                        x = 0;
                        while (x < conn.getDataSet().Tables[0].Columns.Count)
                        {
                            if (y==0)
                            {
                                listView.Columns.Add(conn.getDataSet().Tables[0].Columns[x].ColumnName, 150, HorizontalAlignment.Left);
                            }
                            if (x==0)
                            {
                                listView.Items.Add(conn.getDataSet().Tables[0].Rows[y].ItemArray[x].ToString());
                            }else{
                                listView.Items[y].SubItems.Add(conn.getDataSet().Tables[0].Rows[y].ItemArray[x].ToString());
                            }
                            x += 1;
                        }
                    
                        if(y % 2 == 0)
                        {
                            listView.Items[y].BackColor = Color.WhiteSmoke;
                        }
                        y += 1;
                    }
                }

            } catch(Exception exc)
            {
                MessageBox.Show(exc.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }
		
		
		public void llenarComboBox(Conexion conn, System.Windows.Forms.ComboBox comboBox , String consulta)
        {
            /*Se encarga de forma general de tomar los datos por medio de consultas y mostrarlos en 
            el componente listview.*/

            try
            {
                int i = 0;

                conn.ejecutarConsultaSQL(consulta);
                comboBox.Items.Clear();

                if (conn.getDataSet().Tables.Count != 0)
                {
                    while (i < conn.getDataSet().Tables[0].Rows.Count)
                    {
						comboBox.Items.Add(conn.getDataSet().Tables[0].Rows[i].ItemArray[0].ToString());
						i++;
                    }
                }

            } catch(Exception exc)
            {
                MessageBox.Show(exc.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }
	}
}
