namespace frm_veterinaria
{
    partial class frm_Vercitas
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.label5 = new System.Windows.Forms.Label();
            this.txtBuscar = new System.Windows.Forms.TextBox();
            this.btnBuscar = new System.Windows.Forms.Button();
            this.button1 = new System.Windows.Forms.Button();
            this.txtHora = new System.Windows.Forms.TextBox();
            this.Hora = new System.Windows.Forms.Label();
            this.txtFecha = new System.Windows.Forms.TextBox();
            this.label6 = new System.Windows.Forms.Label();
            this.txtCodV = new System.Windows.Forms.TextBox();
            this.label4 = new System.Windows.Forms.Label();
            this.txtCodD = new System.Windows.Forms.TextBox();
            this.label3 = new System.Windows.Forms.Label();
            this.txtCodM = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.txtCodC = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.btnEliminar = new System.Windows.Forms.Button();
            this.button2 = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Location = new System.Drawing.Point(60, 29);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(124, 13);
            this.label5.TabIndex = 45;
            this.label5.Text = "Ingrese el Codigo de cita";
            // 
            // txtBuscar
            // 
            this.txtBuscar.Location = new System.Drawing.Point(63, 61);
            this.txtBuscar.MaxLength = 3;
            this.txtBuscar.Name = "txtBuscar";
            this.txtBuscar.Size = new System.Drawing.Size(220, 20);
            this.txtBuscar.TabIndex = 44;
            // 
            // btnBuscar
            // 
            this.btnBuscar.Location = new System.Drawing.Point(296, 58);
            this.btnBuscar.Name = "btnBuscar";
            this.btnBuscar.Size = new System.Drawing.Size(71, 23);
            this.btnBuscar.TabIndex = 43;
            this.btnBuscar.Text = "Buscar";
            this.btnBuscar.UseVisualStyleBackColor = true;
            this.btnBuscar.Click += new System.EventHandler(this.btnBuscar_Click);
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(373, 59);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(80, 23);
            this.button1.TabIndex = 42;
            this.button1.Text = "Salir";
            this.button1.UseVisualStyleBackColor = true;
            // 
            // txtHora
            // 
            this.txtHora.Location = new System.Drawing.Point(121, 261);
            this.txtHora.MaxLength = 3;
            this.txtHora.Name = "txtHora";
            this.txtHora.ReadOnly = true;
            this.txtHora.Size = new System.Drawing.Size(220, 20);
            this.txtHora.TabIndex = 41;
            // 
            // Hora
            // 
            this.Hora.AutoSize = true;
            this.Hora.Location = new System.Drawing.Point(7, 261);
            this.Hora.Name = "Hora";
            this.Hora.Size = new System.Drawing.Size(30, 13);
            this.Hora.TabIndex = 40;
            this.Hora.Text = "Hora";
            // 
            // txtFecha
            // 
            this.txtFecha.Location = new System.Drawing.Point(121, 235);
            this.txtFecha.MaxLength = 10;
            this.txtFecha.Name = "txtFecha";
            this.txtFecha.ReadOnly = true;
            this.txtFecha.Size = new System.Drawing.Size(220, 20);
            this.txtFecha.TabIndex = 39;
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Location = new System.Drawing.Point(7, 235);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(37, 13);
            this.label6.TabIndex = 38;
            this.label6.Text = "Fecha";
            // 
            // txtCodV
            // 
            this.txtCodV.Location = new System.Drawing.Point(121, 185);
            this.txtCodV.MaxLength = 3;
            this.txtCodV.Name = "txtCodV";
            this.txtCodV.ReadOnly = true;
            this.txtCodV.Size = new System.Drawing.Size(220, 20);
            this.txtCodV.TabIndex = 37;
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(7, 188);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(107, 13);
            this.label4.TabIndex = 36;
            this.label4.Text = "Codigo de veterinario";
            // 
            // txtCodD
            // 
            this.txtCodD.Location = new System.Drawing.Point(121, 213);
            this.txtCodD.MaxLength = 3;
            this.txtCodD.Name = "txtCodD";
            this.txtCodD.ReadOnly = true;
            this.txtCodD.Size = new System.Drawing.Size(220, 20);
            this.txtCodD.TabIndex = 35;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(7, 213);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(90, 13);
            this.label3.TabIndex = 34;
            this.label3.Text = "Codigo de Dueño";
            // 
            // txtCodM
            // 
            this.txtCodM.Location = new System.Drawing.Point(121, 157);
            this.txtCodM.MaxLength = 3;
            this.txtCodM.Name = "txtCodM";
            this.txtCodM.ReadOnly = true;
            this.txtCodM.Size = new System.Drawing.Size(220, 20);
            this.txtCodM.TabIndex = 33;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(7, 157);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(99, 13);
            this.label2.TabIndex = 32;
            this.label2.Text = "Codigo de Mascota";
            // 
            // txtCodC
            // 
            this.txtCodC.Location = new System.Drawing.Point(121, 131);
            this.txtCodC.MaxLength = 3;
            this.txtCodC.Name = "txtCodC";
            this.txtCodC.ReadOnly = true;
            this.txtCodC.Size = new System.Drawing.Size(220, 20);
            this.txtCodC.TabIndex = 31;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(7, 131);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(75, 13);
            this.label1.TabIndex = 30;
            this.label1.Text = "Codigo de cita";
            // 
            // btnEliminar
            // 
            this.btnEliminar.Location = new System.Drawing.Point(34, 313);
            this.btnEliminar.Name = "btnEliminar";
            this.btnEliminar.Size = new System.Drawing.Size(123, 23);
            this.btnEliminar.TabIndex = 46;
            this.btnEliminar.Text = "Eliminar";
            this.btnEliminar.UseVisualStyleBackColor = true;
            this.btnEliminar.Click += new System.EventHandler(this.btnEliminar_Click);
            // 
            // button2
            // 
            this.button2.Location = new System.Drawing.Point(259, 313);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(123, 23);
            this.button2.TabIndex = 47;
            this.button2.Text = "Modificar";
            this.button2.UseVisualStyleBackColor = true;
            // 
            // frm_Vercitas
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(480, 368);
            this.Controls.Add(this.button2);
            this.Controls.Add(this.btnEliminar);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.txtBuscar);
            this.Controls.Add(this.btnBuscar);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.txtHora);
            this.Controls.Add(this.Hora);
            this.Controls.Add(this.txtFecha);
            this.Controls.Add(this.label6);
            this.Controls.Add(this.txtCodV);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.txtCodD);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.txtCodM);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.txtCodC);
            this.Controls.Add(this.label1);
            this.Name = "frm_Vercitas";
            this.Text = "frm_Vercitas";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.TextBox txtBuscar;
        private System.Windows.Forms.Button btnBuscar;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.TextBox txtHora;
        private System.Windows.Forms.Label Hora;
        private System.Windows.Forms.TextBox txtFecha;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.TextBox txtCodV;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.TextBox txtCodD;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.TextBox txtCodM;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txtCodC;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button btnEliminar;
        private System.Windows.Forms.Button button2;
    }
}