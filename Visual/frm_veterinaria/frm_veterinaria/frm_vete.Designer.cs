namespace frm_veterinaria
{
    partial class frm_vete
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
            this.btnExit = new System.Windows.Forms.Button();
            this.btnAgregar = new System.Windows.Forms.Button();
            this.lblDir = new System.Windows.Forms.Label();
            this.txtDir = new System.Windows.Forms.TextBox();
            this.lblTel = new System.Windows.Forms.Label();
            this.txtTel = new System.Windows.Forms.TextBox();
            this.lblCod = new System.Windows.Forms.Label();
            this.txtCod = new System.Windows.Forms.TextBox();
            this.lblCed = new System.Windows.Forms.Label();
            this.txtCed = new System.Windows.Forms.TextBox();
            this.lblAp2 = new System.Windows.Forms.Label();
            this.txtAp2 = new System.Windows.Forms.TextBox();
            this.lblAp1 = new System.Windows.Forms.Label();
            this.txtAp1 = new System.Windows.Forms.TextBox();
            this.lblNom = new System.Windows.Forms.Label();
            this.txtNom = new System.Windows.Forms.TextBox();
            this.SuspendLayout();
            // 
            // btnExit
            // 
            this.btnExit.Location = new System.Drawing.Point(372, 301);
            this.btnExit.Name = "btnExit";
            this.btnExit.Size = new System.Drawing.Size(75, 23);
            this.btnExit.TabIndex = 95;
            this.btnExit.Text = "Salir";
            this.btnExit.UseVisualStyleBackColor = true;
            this.btnExit.Click += new System.EventHandler(this.btnExit_Click);
            // 
            // btnAgregar
            // 
            this.btnAgregar.Location = new System.Drawing.Point(220, 301);
            this.btnAgregar.Name = "btnAgregar";
            this.btnAgregar.Size = new System.Drawing.Size(75, 23);
            this.btnAgregar.TabIndex = 94;
            this.btnAgregar.Text = "Agregar";
            this.btnAgregar.UseVisualStyleBackColor = true;
            this.btnAgregar.Click += new System.EventHandler(this.btnAgregar_Click);
            // 
            // lblDir
            // 
            this.lblDir.AutoSize = true;
            this.lblDir.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblDir.Location = new System.Drawing.Point(77, 217);
            this.lblDir.Name = "lblDir";
            this.lblDir.Size = new System.Drawing.Size(85, 20);
            this.lblDir.TabIndex = 93;
            this.lblDir.Text = "Direccion";
            // 
            // txtDir
            // 
            this.txtDir.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtDir.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtDir.Location = new System.Drawing.Point(192, 220);
            this.txtDir.MaxLength = 50;
            this.txtDir.Name = "txtDir";
            this.txtDir.Size = new System.Drawing.Size(292, 20);
            this.txtDir.TabIndex = 92;
            // 
            // lblTel
            // 
            this.lblTel.AutoSize = true;
            this.lblTel.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblTel.Location = new System.Drawing.Point(77, 194);
            this.lblTel.Name = "lblTel";
            this.lblTel.Size = new System.Drawing.Size(80, 20);
            this.lblTel.TabIndex = 91;
            this.lblTel.Text = "Telefono";
            // 
            // txtTel
            // 
            this.txtTel.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtTel.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtTel.Location = new System.Drawing.Point(192, 194);
            this.txtTel.MaxLength = 8;
            this.txtTel.Name = "txtTel";
            this.txtTel.Size = new System.Drawing.Size(292, 20);
            this.txtTel.TabIndex = 90;
            // 
            // lblCod
            // 
            this.lblCod.AutoSize = true;
            this.lblCod.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblCod.Location = new System.Drawing.Point(77, 168);
            this.lblCod.Name = "lblCod";
            this.lblCod.Size = new System.Drawing.Size(69, 20);
            this.lblCod.TabIndex = 89;
            this.lblCod.Text = "Codigo";
            // 
            // txtCod
            // 
            this.txtCod.AutoCompleteMode = System.Windows.Forms.AutoCompleteMode.Suggest;
            this.txtCod.AutoCompleteSource = System.Windows.Forms.AutoCompleteSource.CustomSource;
            this.txtCod.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtCod.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtCod.Location = new System.Drawing.Point(192, 168);
            this.txtCod.MaxLength = 3;
            this.txtCod.Name = "txtCod";
            this.txtCod.Size = new System.Drawing.Size(292, 20);
            this.txtCod.TabIndex = 88;
            // 
            // lblCed
            // 
            this.lblCed.AutoSize = true;
            this.lblCed.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblCed.Location = new System.Drawing.Point(77, 142);
            this.lblCed.Name = "lblCed";
            this.lblCed.Size = new System.Drawing.Size(64, 20);
            this.lblCed.TabIndex = 87;
            this.lblCed.Text = "Cedula";
            // 
            // txtCed
            // 
            this.txtCed.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtCed.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtCed.Location = new System.Drawing.Point(192, 142);
            this.txtCed.MaxLength = 9;
            this.txtCed.Name = "txtCed";
            this.txtCed.Size = new System.Drawing.Size(292, 20);
            this.txtCed.TabIndex = 86;
            // 
            // lblAp2
            // 
            this.lblAp2.AutoSize = true;
            this.lblAp2.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblAp2.Location = new System.Drawing.Point(77, 116);
            this.lblAp2.Name = "lblAp2";
            this.lblAp2.Size = new System.Drawing.Size(93, 20);
            this.lblAp2.TabIndex = 85;
            this.lblAp2.Text = "Apellido 2";
            // 
            // txtAp2
            // 
            this.txtAp2.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtAp2.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtAp2.Location = new System.Drawing.Point(192, 116);
            this.txtAp2.MaxLength = 50;
            this.txtAp2.Name = "txtAp2";
            this.txtAp2.Size = new System.Drawing.Size(292, 20);
            this.txtAp2.TabIndex = 84;
            // 
            // lblAp1
            // 
            this.lblAp1.AutoSize = true;
            this.lblAp1.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblAp1.Location = new System.Drawing.Point(77, 84);
            this.lblAp1.Name = "lblAp1";
            this.lblAp1.Size = new System.Drawing.Size(93, 20);
            this.lblAp1.TabIndex = 83;
            this.lblAp1.Text = "Apellido 1";
            // 
            // txtAp1
            // 
            this.txtAp1.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtAp1.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtAp1.Location = new System.Drawing.Point(192, 84);
            this.txtAp1.MaxLength = 50;
            this.txtAp1.Name = "txtAp1";
            this.txtAp1.Size = new System.Drawing.Size(292, 20);
            this.txtAp1.TabIndex = 82;
            // 
            // lblNom
            // 
            this.lblNom.AutoSize = true;
            this.lblNom.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblNom.Location = new System.Drawing.Point(77, 55);
            this.lblNom.Name = "lblNom";
            this.lblNom.Size = new System.Drawing.Size(77, 20);
            this.lblNom.TabIndex = 81;
            this.lblNom.Text = "Nombre";
            // 
            // txtNom
            // 
            this.txtNom.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtNom.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtNom.Location = new System.Drawing.Point(192, 58);
            this.txtNom.MaxLength = 50;
            this.txtNom.Name = "txtNom";
            this.txtNom.Size = new System.Drawing.Size(292, 20);
            this.txtNom.TabIndex = 80;
            // 
            // frm_vete
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(561, 379);
            this.Controls.Add(this.btnExit);
            this.Controls.Add(this.btnAgregar);
            this.Controls.Add(this.lblDir);
            this.Controls.Add(this.txtDir);
            this.Controls.Add(this.lblTel);
            this.Controls.Add(this.txtTel);
            this.Controls.Add(this.lblCod);
            this.Controls.Add(this.txtCod);
            this.Controls.Add(this.lblCed);
            this.Controls.Add(this.txtCed);
            this.Controls.Add(this.lblAp2);
            this.Controls.Add(this.txtAp2);
            this.Controls.Add(this.lblAp1);
            this.Controls.Add(this.txtAp1);
            this.Controls.Add(this.lblNom);
            this.Controls.Add(this.txtNom);
            this.Name = "frm_vete";
            this.Text = "frm_vete";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btnExit;
        private System.Windows.Forms.Button btnAgregar;
        private System.Windows.Forms.Label lblDir;
        private System.Windows.Forms.TextBox txtDir;
        private System.Windows.Forms.Label lblTel;
        private System.Windows.Forms.TextBox txtTel;
        private System.Windows.Forms.Label lblCod;
        private System.Windows.Forms.TextBox txtCod;
        private System.Windows.Forms.Label lblCed;
        private System.Windows.Forms.TextBox txtCed;
        private System.Windows.Forms.Label lblAp2;
        private System.Windows.Forms.TextBox txtAp2;
        private System.Windows.Forms.Label lblAp1;
        private System.Windows.Forms.TextBox txtAp1;
        private System.Windows.Forms.Label lblNom;
        private System.Windows.Forms.TextBox txtNom;
    }
}