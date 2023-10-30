namespace frm_veterinaria
{
    partial class frm_tratamiento
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
            this.btnSalir = new System.Windows.Forms.Button();
            this.btnAplicar = new System.Windows.Forms.Button();
            this.label4 = new System.Windows.Forms.Label();
            this.txtDosis = new System.Windows.Forms.TextBox();
            this.label3 = new System.Windows.Forms.Label();
            this.txtCodM = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.txtOb = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.txtCodT = new System.Windows.Forms.TextBox();
            this.SuspendLayout();
            // 
            // btnSalir
            // 
            this.btnSalir.Location = new System.Drawing.Point(386, 270);
            this.btnSalir.Name = "btnSalir";
            this.btnSalir.Size = new System.Drawing.Size(75, 23);
            this.btnSalir.TabIndex = 26;
            this.btnSalir.Text = "Salir";
            this.btnSalir.UseVisualStyleBackColor = true;
            // 
            // btnAplicar
            // 
            this.btnAplicar.Location = new System.Drawing.Point(239, 270);
            this.btnAplicar.Name = "btnAplicar";
            this.btnAplicar.Size = new System.Drawing.Size(75, 23);
            this.btnAplicar.TabIndex = 25;
            this.btnAplicar.Text = "Aplicar";
            this.btnAplicar.UseVisualStyleBackColor = true;
            this.btnAplicar.Click += new System.EventHandler(this.btnAplicar_Click);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F);
            this.label4.Location = new System.Drawing.Point(36, 166);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(47, 18);
            this.label4.TabIndex = 24;
            this.label4.Text = "Dosis";
            // 
            // txtDosis
            // 
            this.txtDosis.Location = new System.Drawing.Point(239, 166);
            this.txtDosis.MaxLength = 10;
            this.txtDosis.Name = "txtDosis";
            this.txtDosis.ReadOnly = true;
            this.txtDosis.Size = new System.Drawing.Size(263, 20);
            this.txtDosis.TabIndex = 23;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F);
            this.label3.Location = new System.Drawing.Point(36, 140);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(170, 18);
            this.label3.TabIndex = 22;
            this.label3.Text = "Codigo de medicamento";
            // 
            // txtCodM
            // 
            this.txtCodM.Location = new System.Drawing.Point(239, 140);
            this.txtCodM.MaxLength = 3;
            this.txtCodM.Name = "txtCodM";
            this.txtCodM.Size = new System.Drawing.Size(263, 20);
            this.txtCodM.TabIndex = 21;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F);
            this.label2.Location = new System.Drawing.Point(36, 208);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(108, 18);
            this.label2.TabIndex = 20;
            this.label2.Text = "Observaciones";
            // 
            // txtOb
            // 
            this.txtOb.Location = new System.Drawing.Point(239, 209);
            this.txtOb.MaxLength = 50;
            this.txtOb.Name = "txtOb";
            this.txtOb.Size = new System.Drawing.Size(263, 20);
            this.txtOb.TabIndex = 19;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 11.25F);
            this.label1.Location = new System.Drawing.Point(36, 110);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(154, 18);
            this.label1.TabIndex = 18;
            this.label1.Text = "Codigo de tratamiento";
            // 
            // txtCodT
            // 
            this.txtCodT.Location = new System.Drawing.Point(239, 110);
            this.txtCodT.MaxLength = 3;
            this.txtCodT.Name = "txtCodT";
            this.txtCodT.Size = new System.Drawing.Size(263, 20);
            this.txtCodT.TabIndex = 17;
            // 
            // frm_tratamiento
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(539, 402);
            this.Controls.Add(this.btnSalir);
            this.Controls.Add(this.btnAplicar);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.txtDosis);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.txtCodM);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.txtOb);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.txtCodT);
            this.Name = "frm_tratamiento";
            this.Text = "frm_tratamiento";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btnSalir;
        private System.Windows.Forms.Button btnAplicar;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.TextBox txtDosis;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.TextBox txtCodM;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txtOb;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txtCodT;
    }
}