namespace frm_veterinaria
{
    partial class frm_Exp
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
            this.label5 = new System.Windows.Forms.Label();
            this.txtFecha = new System.Windows.Forms.TextBox();
            this.label4 = new System.Windows.Forms.Label();
            this.txtCodT = new System.Windows.Forms.TextBox();
            this.label3 = new System.Windows.Forms.Label();
            this.txtCodV = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.txtCodM = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.txtCodExp = new System.Windows.Forms.TextBox();
            this.btnA = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // btnSalir
            // 
            this.btnSalir.Location = new System.Drawing.Point(307, 284);
            this.btnSalir.Name = "btnSalir";
            this.btnSalir.Size = new System.Drawing.Size(92, 34);
            this.btnSalir.TabIndex = 23;
            this.btnSalir.Text = "Salir";
            this.btnSalir.UseVisualStyleBackColor = true;
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Location = new System.Drawing.Point(86, 224);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(37, 13);
            this.label5.TabIndex = 22;
            this.label5.Text = "Fecha";
            // 
            // txtFecha
            // 
            this.txtFecha.Location = new System.Drawing.Point(206, 224);
            this.txtFecha.MaxLength = 3;
            this.txtFecha.Name = "txtFecha";
            this.txtFecha.Size = new System.Drawing.Size(202, 20);
            this.txtFecha.TabIndex = 21;
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(86, 186);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(110, 13);
            this.label4.TabIndex = 20;
            this.label4.Text = "Codigo de tratamiento";
            // 
            // txtCodT
            // 
            this.txtCodT.Location = new System.Drawing.Point(206, 186);
            this.txtCodT.MaxLength = 3;
            this.txtCodT.Name = "txtCodT";
            this.txtCodT.Size = new System.Drawing.Size(202, 20);
            this.txtCodT.TabIndex = 19;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(86, 148);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(107, 13);
            this.label3.TabIndex = 18;
            this.label3.Text = "Codigo de veterinario";
            // 
            // txtCodV
            // 
            this.txtCodV.Location = new System.Drawing.Point(206, 148);
            this.txtCodV.MaxLength = 3;
            this.txtCodV.Name = "txtCodV";
            this.txtCodV.Size = new System.Drawing.Size(202, 20);
            this.txtCodV.TabIndex = 17;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(86, 101);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(98, 13);
            this.label2.TabIndex = 16;
            this.label2.Text = "Codigo de mascota";
            // 
            // txtCodM
            // 
            this.txtCodM.Location = new System.Drawing.Point(206, 101);
            this.txtCodM.MaxLength = 3;
            this.txtCodM.Name = "txtCodM";
            this.txtCodM.Size = new System.Drawing.Size(202, 20);
            this.txtCodM.TabIndex = 15;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(86, 63);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(111, 13);
            this.label1.TabIndex = 14;
            this.label1.Text = "Codigo de Expediente";
            // 
            // txtCodExp
            // 
            this.txtCodExp.Location = new System.Drawing.Point(206, 63);
            this.txtCodExp.MaxLength = 3;
            this.txtCodExp.Name = "txtCodExp";
            this.txtCodExp.Size = new System.Drawing.Size(202, 20);
            this.txtCodExp.TabIndex = 13;
            // 
            // btnA
            // 
            this.btnA.Location = new System.Drawing.Point(144, 284);
            this.btnA.Name = "btnA";
            this.btnA.Size = new System.Drawing.Size(92, 34);
            this.btnA.TabIndex = 12;
            this.btnA.Text = "Añadir";
            this.btnA.UseVisualStyleBackColor = true;
            this.btnA.Click += new System.EventHandler(this.btnA_Click);
            // 
            // frm_Exp
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(494, 380);
            this.Controls.Add(this.btnSalir);
            this.Controls.Add(this.label5);
            this.Controls.Add(this.txtFecha);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.txtCodT);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.txtCodV);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.txtCodM);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.txtCodExp);
            this.Controls.Add(this.btnA);
            this.Name = "frm_Exp";
            this.Text = "frm_Exp";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btnSalir;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.TextBox txtFecha;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.TextBox txtCodT;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.TextBox txtCodV;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txtCodM;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txtCodExp;
        private System.Windows.Forms.Button btnA;
    }
}