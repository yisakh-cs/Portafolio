namespace frm_veterinaria
{
    partial class frm_citas
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
            this.button1 = new System.Windows.Forms.Button();
            this.txtHora = new System.Windows.Forms.TextBox();
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
            this.btnAgregar = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(266, 261);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(75, 23);
            this.button1.TabIndex = 40;
            this.button1.Text = "Salir";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click_1);
            // 
            // txtHora
            // 
            this.txtHora.Location = new System.Drawing.Point(171, 211);
            this.txtHora.MaxLength = 3;
            this.txtHora.Name = "txtHora";
            this.txtHora.Size = new System.Drawing.Size(220, 20);
            this.txtHora.TabIndex = 39;
            // 
            // txtFecha
            // 
            this.txtFecha.Location = new System.Drawing.Point(171, 185);
            this.txtFecha.MaxLength = 10;
            this.txtFecha.Name = "txtFecha";
            this.txtFecha.Size = new System.Drawing.Size(220, 20);
            this.txtFecha.TabIndex = 38;
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Location = new System.Drawing.Point(31, 185);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(37, 13);
            this.label6.TabIndex = 37;
            this.label6.Text = "Fecha";
            // 
            // txtCodV
            // 
            this.txtCodV.Location = new System.Drawing.Point(171, 152);
            this.txtCodV.MaxLength = 3;
            this.txtCodV.Name = "txtCodV";
            this.txtCodV.Size = new System.Drawing.Size(220, 20);
            this.txtCodV.TabIndex = 36;
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(31, 155);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(107, 13);
            this.label4.TabIndex = 35;
            this.label4.Text = "Codigo de veterinario";
            // 
            // txtCodD
            // 
            this.txtCodD.Location = new System.Drawing.Point(171, 123);
            this.txtCodD.MaxLength = 3;
            this.txtCodD.Name = "txtCodD";
            this.txtCodD.Size = new System.Drawing.Size(220, 20);
            this.txtCodD.TabIndex = 34;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(31, 123);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(90, 13);
            this.label3.TabIndex = 33;
            this.label3.Text = "Codigo de Dueño";
            // 
            // txtCodM
            // 
            this.txtCodM.Location = new System.Drawing.Point(171, 86);
            this.txtCodM.MaxLength = 3;
            this.txtCodM.Name = "txtCodM";
            this.txtCodM.Size = new System.Drawing.Size(220, 20);
            this.txtCodM.TabIndex = 32;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(31, 86);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(99, 13);
            this.label2.TabIndex = 31;
            this.label2.Text = "Codigo de Mascota";
            // 
            // txtCodC
            // 
            this.txtCodC.Location = new System.Drawing.Point(171, 56);
            this.txtCodC.MaxLength = 3;
            this.txtCodC.Name = "txtCodC";
            this.txtCodC.Size = new System.Drawing.Size(220, 20);
            this.txtCodC.TabIndex = 30;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(31, 56);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(75, 13);
            this.label1.TabIndex = 29;
            this.label1.Text = "Codigo de cita";
            // 
            // btnAgregar
            // 
            this.btnAgregar.Location = new System.Drawing.Point(72, 261);
            this.btnAgregar.Name = "btnAgregar";
            this.btnAgregar.Size = new System.Drawing.Size(75, 23);
            this.btnAgregar.TabIndex = 28;
            this.btnAgregar.Text = "Agregar";
            this.btnAgregar.UseVisualStyleBackColor = true;
            this.btnAgregar.Click += new System.EventHandler(this.btnAgregar_Click);
            // 
            // frm_citas
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(423, 340);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.txtHora);
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
            this.Controls.Add(this.btnAgregar);
            this.Name = "frm_citas";
            this.Text = "frm_citas";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.TextBox txtHora;
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
        private System.Windows.Forms.Button btnAgregar;
    }
}