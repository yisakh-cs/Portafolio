namespace frm_veterinaria
{
    partial class frm_busMascota
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
            this.label1 = new System.Windows.Forms.Label();
            this.txtPeso = new System.Windows.Forms.TextBox();
            this.btnSalir = new System.Windows.Forms.Button();
            this.btnBuscar = new System.Windows.Forms.Button();
            this.lblDir = new System.Windows.Forms.Label();
            this.txtFecha = new System.Windows.Forms.TextBox();
            this.lblTel = new System.Windows.Forms.Label();
            this.txtGen = new System.Windows.Forms.TextBox();
            this.lblCod = new System.Windows.Forms.Label();
            this.txtColor = new System.Windows.Forms.TextBox();
            this.lblCed = new System.Windows.Forms.Label();
            this.txtCodM = new System.Windows.Forms.TextBox();
            this.lblAp2 = new System.Windows.Forms.Label();
            this.txtCodEsp = new System.Windows.Forms.TextBox();
            this.lblAp1 = new System.Windows.Forms.Label();
            this.txtCodD = new System.Windows.Forms.TextBox();
            this.lblNom = new System.Windows.Forms.Label();
            this.txtNom = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.txtBuscar = new System.Windows.Forms.TextBox();
            this.label3 = new System.Windows.Forms.Label();
            this.btnEliminar = new System.Windows.Forms.Button();
            this.button1 = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft YaHei UI", 10F, System.Drawing.FontStyle.Bold);
            this.label1.Location = new System.Drawing.Point(15, 290);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(41, 18);
            this.label1.TabIndex = 51;
            this.label1.Text = "Peso";
            // 
            // txtPeso
            // 
            this.txtPeso.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtPeso.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtPeso.Location = new System.Drawing.Point(227, 288);
            this.txtPeso.MaxLength = 10;
            this.txtPeso.Name = "txtPeso";
            this.txtPeso.Size = new System.Drawing.Size(292, 20);
            this.txtPeso.TabIndex = 50;
            // 
            // btnSalir
            // 
            this.btnSalir.BackColor = System.Drawing.SystemColors.ActiveBorder;
            this.btnSalir.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.btnSalir.Location = new System.Drawing.Point(350, 42);
            this.btnSalir.Name = "btnSalir";
            this.btnSalir.Size = new System.Drawing.Size(206, 23);
            this.btnSalir.TabIndex = 49;
            this.btnSalir.Text = "Salir";
            this.btnSalir.UseVisualStyleBackColor = false;
            // 
            // btnBuscar
            // 
            this.btnBuscar.BackColor = System.Drawing.SystemColors.ActiveBorder;
            this.btnBuscar.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.btnBuscar.Location = new System.Drawing.Point(252, 42);
            this.btnBuscar.Name = "btnBuscar";
            this.btnBuscar.Size = new System.Drawing.Size(89, 23);
            this.btnBuscar.TabIndex = 48;
            this.btnBuscar.Text = "Buscar";
            this.btnBuscar.UseVisualStyleBackColor = false;
            this.btnBuscar.Click += new System.EventHandler(this.btnBuscar_Click);
            // 
            // lblDir
            // 
            this.lblDir.AutoSize = true;
            this.lblDir.Font = new System.Drawing.Font("Microsoft YaHei UI", 10F, System.Drawing.FontStyle.Bold);
            this.lblDir.Location = new System.Drawing.Point(15, 272);
            this.lblDir.Name = "lblDir";
            this.lblDir.Size = new System.Drawing.Size(151, 18);
            this.lblDir.TabIndex = 47;
            this.lblDir.Text = "Fecha de nacimiento";
            // 
            // txtFecha
            // 
            this.txtFecha.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtFecha.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtFecha.Location = new System.Drawing.Point(227, 270);
            this.txtFecha.MaxLength = 10;
            this.txtFecha.Name = "txtFecha";
            this.txtFecha.Size = new System.Drawing.Size(292, 20);
            this.txtFecha.TabIndex = 46;
            // 
            // lblTel
            // 
            this.lblTel.AutoSize = true;
            this.lblTel.Font = new System.Drawing.Font("Microsoft YaHei UI", 10F, System.Drawing.FontStyle.Bold);
            this.lblTel.Location = new System.Drawing.Point(15, 254);
            this.lblTel.Name = "lblTel";
            this.lblTel.Size = new System.Drawing.Size(45, 18);
            this.lblTel.TabIndex = 45;
            this.lblTel.Text = "Color";
            // 
            // txtGen
            // 
            this.txtGen.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtGen.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtGen.Location = new System.Drawing.Point(227, 234);
            this.txtGen.MaxLength = 10;
            this.txtGen.Name = "txtGen";
            this.txtGen.Size = new System.Drawing.Size(292, 20);
            this.txtGen.TabIndex = 44;
            // 
            // lblCod
            // 
            this.lblCod.AutoSize = true;
            this.lblCod.Font = new System.Drawing.Font("Microsoft YaHei UI", 10F, System.Drawing.FontStyle.Bold);
            this.lblCod.Location = new System.Drawing.Point(15, 236);
            this.lblCod.Name = "lblCod";
            this.lblCod.Size = new System.Drawing.Size(59, 18);
            this.lblCod.TabIndex = 43;
            this.lblCod.Text = "Genero";
            // 
            // txtColor
            // 
            this.txtColor.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtColor.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtColor.Location = new System.Drawing.Point(227, 252);
            this.txtColor.MaxLength = 20;
            this.txtColor.Name = "txtColor";
            this.txtColor.Size = new System.Drawing.Size(292, 20);
            this.txtColor.TabIndex = 42;
            // 
            // lblCed
            // 
            this.lblCed.AutoSize = true;
            this.lblCed.Font = new System.Drawing.Font("Microsoft YaHei UI", 10F, System.Drawing.FontStyle.Bold);
            this.lblCed.Location = new System.Drawing.Point(15, 218);
            this.lblCed.Name = "lblCed";
            this.lblCed.Size = new System.Drawing.Size(141, 18);
            this.lblCed.TabIndex = 41;
            this.lblCed.Text = "Codigo de mascota";
            // 
            // txtCodM
            // 
            this.txtCodM.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtCodM.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtCodM.Location = new System.Drawing.Point(227, 216);
            this.txtCodM.MaxLength = 3;
            this.txtCodM.Name = "txtCodM";
            this.txtCodM.ReadOnly = true;
            this.txtCodM.Size = new System.Drawing.Size(292, 20);
            this.txtCodM.TabIndex = 40;
            // 
            // lblAp2
            // 
            this.lblAp2.AutoSize = true;
            this.lblAp2.Font = new System.Drawing.Font("Microsoft YaHei UI", 10F, System.Drawing.FontStyle.Bold);
            this.lblAp2.Location = new System.Drawing.Point(15, 200);
            this.lblAp2.Name = "lblAp2";
            this.lblAp2.Size = new System.Drawing.Size(133, 18);
            this.lblAp2.TabIndex = 39;
            this.lblAp2.Text = "Codigo de especie";
            // 
            // txtCodEsp
            // 
            this.txtCodEsp.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtCodEsp.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtCodEsp.Location = new System.Drawing.Point(227, 198);
            this.txtCodEsp.MaxLength = 3;
            this.txtCodEsp.Name = "txtCodEsp";
            this.txtCodEsp.ReadOnly = true;
            this.txtCodEsp.Size = new System.Drawing.Size(292, 20);
            this.txtCodEsp.TabIndex = 38;
            // 
            // lblAp1
            // 
            this.lblAp1.AutoSize = true;
            this.lblAp1.Font = new System.Drawing.Font("Microsoft YaHei UI", 10F, System.Drawing.FontStyle.Bold);
            this.lblAp1.Location = new System.Drawing.Point(15, 183);
            this.lblAp1.Name = "lblAp1";
            this.lblAp1.Size = new System.Drawing.Size(126, 18);
            this.lblAp1.TabIndex = 37;
            this.lblAp1.Text = "Codigo de dueño";
            // 
            // txtCodD
            // 
            this.txtCodD.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtCodD.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtCodD.Location = new System.Drawing.Point(227, 181);
            this.txtCodD.MaxLength = 3;
            this.txtCodD.Name = "txtCodD";
            this.txtCodD.Size = new System.Drawing.Size(292, 20);
            this.txtCodD.TabIndex = 36;
            // 
            // lblNom
            // 
            this.lblNom.AutoSize = true;
            this.lblNom.Font = new System.Drawing.Font("Microsoft YaHei UI", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblNom.Location = new System.Drawing.Point(15, 166);
            this.lblNom.Name = "lblNom";
            this.lblNom.Size = new System.Drawing.Size(64, 17);
            this.lblNom.TabIndex = 35;
            this.lblNom.Text = "Nombre";
            // 
            // txtNom
            // 
            this.txtNom.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtNom.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtNom.Location = new System.Drawing.Point(227, 163);
            this.txtNom.MaxLength = 50;
            this.txtNom.Name = "txtNom";
            this.txtNom.Size = new System.Drawing.Size(292, 20);
            this.txtNom.TabIndex = 34;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft YaHei UI", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(27, 9);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(191, 17);
            this.label2.TabIndex = 53;
            this.label2.Text = "Inserte la codigo del dueño";
            // 
            // txtBuscar
            // 
            this.txtBuscar.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.txtBuscar.CharacterCasing = System.Windows.Forms.CharacterCasing.Upper;
            this.txtBuscar.Location = new System.Drawing.Point(12, 42);
            this.txtBuscar.MaxLength = 50;
            this.txtBuscar.Name = "txtBuscar";
            this.txtBuscar.Size = new System.Drawing.Size(206, 20);
            this.txtBuscar.TabIndex = 52;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Microsoft YaHei UI", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(122, 116);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(143, 17);
            this.label3.TabIndex = 54;
            this.label3.Text = "Datos de la mascota";
            // 
            // btnEliminar
            // 
            this.btnEliminar.BackColor = System.Drawing.SystemColors.ActiveBorder;
            this.btnEliminar.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.btnEliminar.Location = new System.Drawing.Point(18, 352);
            this.btnEliminar.Name = "btnEliminar";
            this.btnEliminar.Size = new System.Drawing.Size(156, 23);
            this.btnEliminar.TabIndex = 55;
            this.btnEliminar.Text = "Eliminar";
            this.btnEliminar.UseVisualStyleBackColor = false;
            this.btnEliminar.Click += new System.EventHandler(this.btnEliminar_Click);
            // 
            // button1
            // 
            this.button1.BackColor = System.Drawing.SystemColors.ActiveBorder;
            this.button1.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.button1.Location = new System.Drawing.Point(350, 352);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(156, 23);
            this.button1.TabIndex = 56;
            this.button1.Text = "Modificar";
            this.button1.UseVisualStyleBackColor = false;
            // 
            // frm_busMascota
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(568, 404);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.btnEliminar);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.txtBuscar);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.txtPeso);
            this.Controls.Add(this.btnSalir);
            this.Controls.Add(this.btnBuscar);
            this.Controls.Add(this.lblDir);
            this.Controls.Add(this.txtFecha);
            this.Controls.Add(this.lblTel);
            this.Controls.Add(this.txtGen);
            this.Controls.Add(this.lblCod);
            this.Controls.Add(this.txtColor);
            this.Controls.Add(this.lblCed);
            this.Controls.Add(this.txtCodM);
            this.Controls.Add(this.lblAp2);
            this.Controls.Add(this.txtCodEsp);
            this.Controls.Add(this.lblAp1);
            this.Controls.Add(this.txtCodD);
            this.Controls.Add(this.lblNom);
            this.Controls.Add(this.txtNom);
            this.Name = "frm_busMascota";
            this.Text = "frm_busMascota";
            this.Load += new System.EventHandler(this.frm_busMascota_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txtPeso;
        private System.Windows.Forms.Button btnSalir;
        private System.Windows.Forms.Button btnBuscar;
        private System.Windows.Forms.Label lblDir;
        private System.Windows.Forms.TextBox txtFecha;
        private System.Windows.Forms.Label lblTel;
        private System.Windows.Forms.TextBox txtGen;
        private System.Windows.Forms.Label lblCod;
        private System.Windows.Forms.TextBox txtColor;
        private System.Windows.Forms.Label lblCed;
        private System.Windows.Forms.TextBox txtCodM;
        private System.Windows.Forms.Label lblAp2;
        private System.Windows.Forms.TextBox txtCodEsp;
        private System.Windows.Forms.Label lblAp1;
        private System.Windows.Forms.TextBox txtCodD;
        private System.Windows.Forms.Label lblNom;
        private System.Windows.Forms.TextBox txtNom;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txtBuscar;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Button btnEliminar;
        private System.Windows.Forms.Button button1;
    }
}