namespace frm_veterinaria
{
    partial class frm_agrMascotas
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
            this.label2 = new System.Windows.Forms.Label();
            this.txtCodEsp = new System.Windows.Forms.ComboBox();
            this.label1 = new System.Windows.Forms.Label();
            this.txtPeso = new System.Windows.Forms.TextBox();
            this.btnSalir = new System.Windows.Forms.Button();
            this.btnAgregar = new System.Windows.Forms.Button();
            this.lblDir = new System.Windows.Forms.Label();
            this.txtFecha = new System.Windows.Forms.TextBox();
            this.lblTel = new System.Windows.Forms.Label();
            this.txtGen = new System.Windows.Forms.TextBox();
            this.lblCod = new System.Windows.Forms.Label();
            this.txtColor = new System.Windows.Forms.TextBox();
            this.lblCed = new System.Windows.Forms.Label();
            this.lblAp2 = new System.Windows.Forms.Label();
            this.txtCodM = new System.Windows.Forms.TextBox();
            this.lblAp1 = new System.Windows.Forms.Label();
            this.txtCodD = new System.Windows.Forms.TextBox();
            this.lblNom = new System.Windows.Forms.Label();
            this.txtNom = new System.Windows.Forms.TextBox();
            this.SuspendLayout();
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(116, 4);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(148, 20);
            this.label2.TabIndex = 72;
            this.label2.Text = "Agregar Mascota";
            // 
            // txtCodEsp
            // 
            this.txtCodEsp.FormattingEnabled = true;
            this.txtCodEsp.Items.AddRange(new object[] {
            "Perro",
            "Gato",
            "Bovina",
            "Ave"});
            this.txtCodEsp.Location = new System.Drawing.Point(218, 96);
            this.txtCodEsp.Name = "txtCodEsp";
            this.txtCodEsp.Size = new System.Drawing.Size(292, 21);
            this.txtCodEsp.TabIndex = 71;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(19, 231);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(48, 20);
            this.label1.TabIndex = 70;
            this.label1.Text = "Peso";
            // 
            // txtPeso
            // 
            this.txtPeso.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtPeso.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtPeso.Location = new System.Drawing.Point(218, 234);
            this.txtPeso.MaxLength = 10;
            this.txtPeso.Name = "txtPeso";
            this.txtPeso.Size = new System.Drawing.Size(292, 20);
            this.txtPeso.TabIndex = 69;
            // 
            // btnSalir
            // 
            this.btnSalir.BackColor = System.Drawing.SystemColors.ActiveBorder;
            this.btnSalir.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.btnSalir.Location = new System.Drawing.Point(354, 276);
            this.btnSalir.Name = "btnSalir";
            this.btnSalir.Size = new System.Drawing.Size(156, 23);
            this.btnSalir.TabIndex = 68;
            this.btnSalir.Text = "Salir";
            this.btnSalir.UseVisualStyleBackColor = false;
            this.btnSalir.Click += new System.EventHandler(this.btnSalir_Click);
            // 
            // btnAgregar
            // 
            this.btnAgregar.BackColor = System.Drawing.SystemColors.ActiveBorder;
            this.btnAgregar.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.btnAgregar.Location = new System.Drawing.Point(130, 276);
            this.btnAgregar.Name = "btnAgregar";
            this.btnAgregar.Size = new System.Drawing.Size(156, 23);
            this.btnAgregar.TabIndex = 67;
            this.btnAgregar.Text = "Agregar";
            this.btnAgregar.UseVisualStyleBackColor = false;
            this.btnAgregar.Click += new System.EventHandler(this.btnAgregar_Click_1);
            // 
            // lblDir
            // 
            this.lblDir.AutoSize = true;
            this.lblDir.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblDir.Location = new System.Drawing.Point(19, 205);
            this.lblDir.Name = "lblDir";
            this.lblDir.Size = new System.Drawing.Size(174, 20);
            this.lblDir.TabIndex = 66;
            this.lblDir.Text = "Fecha de nacimiento";
            // 
            // txtFecha
            // 
            this.txtFecha.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtFecha.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtFecha.Location = new System.Drawing.Point(218, 205);
            this.txtFecha.MaxLength = 10;
            this.txtFecha.Name = "txtFecha";
            this.txtFecha.Size = new System.Drawing.Size(292, 20);
            this.txtFecha.TabIndex = 65;
            // 
            // lblTel
            // 
            this.lblTel.AutoSize = true;
            this.lblTel.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblTel.Location = new System.Drawing.Point(16, 172);
            this.lblTel.Name = "lblTel";
            this.lblTel.Size = new System.Drawing.Size(54, 20);
            this.lblTel.TabIndex = 64;
            this.lblTel.Text = "Color";
            // 
            // txtGen
            // 
            this.txtGen.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtGen.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtGen.Location = new System.Drawing.Point(218, 149);
            this.txtGen.MaxLength = 10;
            this.txtGen.Name = "txtGen";
            this.txtGen.Size = new System.Drawing.Size(292, 20);
            this.txtGen.TabIndex = 63;
            // 
            // lblCod
            // 
            this.lblCod.AutoSize = true;
            this.lblCod.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblCod.Location = new System.Drawing.Point(16, 146);
            this.lblCod.Name = "lblCod";
            this.lblCod.Size = new System.Drawing.Size(67, 20);
            this.lblCod.TabIndex = 62;
            this.lblCod.Text = "Genero";
            // 
            // txtColor
            // 
            this.txtColor.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtColor.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtColor.Location = new System.Drawing.Point(218, 175);
            this.txtColor.MaxLength = 20;
            this.txtColor.Name = "txtColor";
            this.txtColor.Size = new System.Drawing.Size(292, 20);
            this.txtColor.TabIndex = 61;
            // 
            // lblCed
            // 
            this.lblCed.AutoSize = true;
            this.lblCed.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblCed.Location = new System.Drawing.Point(16, 120);
            this.lblCed.Name = "lblCed";
            this.lblCed.Size = new System.Drawing.Size(167, 20);
            this.lblCed.TabIndex = 60;
            this.lblCed.Text = "Codigo de mascota";
            // 
            // lblAp2
            // 
            this.lblAp2.AutoSize = true;
            this.lblAp2.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblAp2.Location = new System.Drawing.Point(16, 94);
            this.lblAp2.Name = "lblAp2";
            this.lblAp2.Size = new System.Drawing.Size(158, 20);
            this.lblAp2.TabIndex = 59;
            this.lblAp2.Text = "Codigo de especie";
            // 
            // txtCodM
            // 
            this.txtCodM.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtCodM.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtCodM.Location = new System.Drawing.Point(218, 123);
            this.txtCodM.MaxLength = 3;
            this.txtCodM.Name = "txtCodM";
            this.txtCodM.Size = new System.Drawing.Size(292, 20);
            this.txtCodM.TabIndex = 58;
            // 
            // lblAp1
            // 
            this.lblAp1.AutoSize = true;
            this.lblAp1.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblAp1.Location = new System.Drawing.Point(16, 62);
            this.lblAp1.Name = "lblAp1";
            this.lblAp1.Size = new System.Drawing.Size(150, 20);
            this.lblAp1.TabIndex = 57;
            this.lblAp1.Text = "Codigo de dueño";
            // 
            // txtCodD
            // 
            this.txtCodD.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtCodD.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtCodD.Location = new System.Drawing.Point(218, 65);
            this.txtCodD.MaxLength = 3;
            this.txtCodD.Name = "txtCodD";
            this.txtCodD.Size = new System.Drawing.Size(292, 20);
            this.txtCodD.TabIndex = 56;
            // 
            // lblNom
            // 
            this.lblNom.AutoSize = true;
            this.lblNom.Font = new System.Drawing.Font("Microsoft YaHei UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblNom.Location = new System.Drawing.Point(16, 33);
            this.lblNom.Name = "lblNom";
            this.lblNom.Size = new System.Drawing.Size(77, 20);
            this.lblNom.TabIndex = 55;
            this.lblNom.Text = "Nombre";
            // 
            // txtNom
            // 
            this.txtNom.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtNom.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtNom.Location = new System.Drawing.Point(218, 33);
            this.txtNom.MaxLength = 50;
            this.txtNom.Name = "txtNom";
            this.txtNom.Size = new System.Drawing.Size(292, 20);
            this.txtNom.TabIndex = 54;
            // 
            // frm_agrMascotas
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(639, 358);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.txtCodEsp);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.txtPeso);
            this.Controls.Add(this.btnSalir);
            this.Controls.Add(this.btnAgregar);
            this.Controls.Add(this.lblDir);
            this.Controls.Add(this.txtFecha);
            this.Controls.Add(this.lblTel);
            this.Controls.Add(this.txtGen);
            this.Controls.Add(this.lblCod);
            this.Controls.Add(this.txtColor);
            this.Controls.Add(this.lblCed);
            this.Controls.Add(this.lblAp2);
            this.Controls.Add(this.txtCodM);
            this.Controls.Add(this.lblAp1);
            this.Controls.Add(this.txtCodD);
            this.Controls.Add(this.lblNom);
            this.Controls.Add(this.txtNom);
            this.Name = "frm_agrMascotas";
            this.Text = "frm_agrMascotas";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.ComboBox txtCodEsp;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txtPeso;
        private System.Windows.Forms.Button btnSalir;
        private System.Windows.Forms.Button btnAgregar;
        private System.Windows.Forms.Label lblDir;
        private System.Windows.Forms.TextBox txtFecha;
        private System.Windows.Forms.Label lblTel;
        private System.Windows.Forms.TextBox txtGen;
        private System.Windows.Forms.Label lblCod;
        private System.Windows.Forms.TextBox txtColor;
        private System.Windows.Forms.Label lblCed;
        private System.Windows.Forms.Label lblAp2;
        private System.Windows.Forms.TextBox txtCodM;
        private System.Windows.Forms.Label lblAp1;
        private System.Windows.Forms.TextBox txtCodD;
        private System.Windows.Forms.Label lblNom;
        private System.Windows.Forms.TextBox txtNom;
    }
}