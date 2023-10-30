namespace Petvirtual
{
    partial class Juego
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
            this.components = new System.ComponentModel.Container();
            this.BtnAlimentar = new System.Windows.Forms.Button();
            this.BtnDormir = new System.Windows.Forms.Button();
            this.PrbHambre = new System.Windows.Forms.ProgressBar();
            this.lblHambre = new System.Windows.Forms.Label();
            this.lblFelicidad = new System.Windows.Forms.Label();
            this.PrbDiversion = new System.Windows.Forms.ProgressBar();
            this.lblSalud = new System.Windows.Forms.Label();
            this.PrbSalud = new System.Windows.Forms.ProgressBar();
            this.BtnJugar = new System.Windows.Forms.Button();
            this.btnEstudiar = new System.Windows.Forms.Button();
            this.tmrSalud = new System.Windows.Forms.Timer(this.components);
            this.PrbEstudio = new System.Windows.Forms.ProgressBar();
            this.lblEstudio = new System.Windows.Forms.Label();
            this.btnEjercitarse = new System.Windows.Forms.Button();
            this.lblEstado = new System.Windows.Forms.Label();
            this.lblOK = new System.Windows.Forms.Label();
            this.btnGuardar = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // BtnAlimentar
            // 
            this.BtnAlimentar.Location = new System.Drawing.Point(505, 294);
            this.BtnAlimentar.Name = "BtnAlimentar";
            this.BtnAlimentar.Size = new System.Drawing.Size(98, 27);
            this.BtnAlimentar.TabIndex = 0;
            this.BtnAlimentar.Text = "Alimentar";
            this.BtnAlimentar.UseVisualStyleBackColor = true;
            this.BtnAlimentar.Click += new System.EventHandler(this.BtnAlimentar_Click);
            // 
            // BtnDormir
            // 
            this.BtnDormir.Location = new System.Drawing.Point(564, 342);
            this.BtnDormir.Name = "BtnDormir";
            this.BtnDormir.Size = new System.Drawing.Size(98, 27);
            this.BtnDormir.TabIndex = 1;
            this.BtnDormir.Text = "Dormir";
            this.BtnDormir.UseVisualStyleBackColor = true;
            this.BtnDormir.Click += new System.EventHandler(this.BtnDormir_Click);
            // 
            // PrbHambre
            // 
            this.PrbHambre.Location = new System.Drawing.Point(12, 31);
            this.PrbHambre.Maximum = 10;
            this.PrbHambre.Name = "PrbHambre";
            this.PrbHambre.Size = new System.Drawing.Size(114, 10);
            this.PrbHambre.TabIndex = 2;
            this.PrbHambre.Value = 10;
            // 
            // lblHambre
            // 
            this.lblHambre.AutoSize = true;
            this.lblHambre.Location = new System.Drawing.Point(36, 12);
            this.lblHambre.Name = "lblHambre";
            this.lblHambre.Size = new System.Drawing.Size(44, 13);
            this.lblHambre.TabIndex = 3;
            this.lblHambre.Text = "Hambre";
            // 
            // lblFelicidad
            // 
            this.lblFelicidad.AutoSize = true;
            this.lblFelicidad.Location = new System.Drawing.Point(241, 12);
            this.lblFelicidad.Name = "lblFelicidad";
            this.lblFelicidad.Size = new System.Drawing.Size(49, 13);
            this.lblFelicidad.TabIndex = 7;
            this.lblFelicidad.Text = "Felicidad";
            // 
            // PrbDiversion
            // 
            this.PrbDiversion.Location = new System.Drawing.Point(213, 31);
            this.PrbDiversion.Maximum = 10;
            this.PrbDiversion.Name = "PrbDiversion";
            this.PrbDiversion.Size = new System.Drawing.Size(111, 10);
            this.PrbDiversion.TabIndex = 6;
            this.PrbDiversion.Value = 10;
            // 
            // lblSalud
            // 
            this.lblSalud.AutoSize = true;
            this.lblSalud.Font = new System.Drawing.Font("Arial Rounded MT Bold", 9F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblSalud.Location = new System.Drawing.Point(12, 387);
            this.lblSalud.Name = "lblSalud";
            this.lblSalud.Size = new System.Drawing.Size(40, 14);
            this.lblSalud.TabIndex = 9;
            this.lblSalud.Text = "Salud";
            // 
            // PrbSalud
            // 
            this.PrbSalud.Location = new System.Drawing.Point(98, 387);
            this.PrbSalud.Maximum = 10;
            this.PrbSalud.Name = "PrbSalud";
            this.PrbSalud.Size = new System.Drawing.Size(178, 10);
            this.PrbSalud.TabIndex = 8;
            this.PrbSalud.Value = 10;
            // 
            // BtnJugar
            // 
            this.BtnJugar.Location = new System.Drawing.Point(564, 398);
            this.BtnJugar.Name = "BtnJugar";
            this.BtnJugar.Size = new System.Drawing.Size(98, 27);
            this.BtnJugar.TabIndex = 11;
            this.BtnJugar.Text = "Jugar";
            this.BtnJugar.UseVisualStyleBackColor = true;
            this.BtnJugar.Click += new System.EventHandler(this.BtnJugar_Click);
            // 
            // btnEstudiar
            // 
            this.btnEstudiar.Location = new System.Drawing.Point(435, 398);
            this.btnEstudiar.Name = "btnEstudiar";
            this.btnEstudiar.Size = new System.Drawing.Size(98, 27);
            this.btnEstudiar.TabIndex = 10;
            this.btnEstudiar.Text = "Estudiar";
            this.btnEstudiar.UseVisualStyleBackColor = true;
            this.btnEstudiar.Click += new System.EventHandler(this.btnEstudiar_Click);
            // 
            // tmrSalud
            // 
            this.tmrSalud.Enabled = true;
            this.tmrSalud.Interval = 2000;
            this.tmrSalud.Tick += new System.EventHandler(this.tmrSalud_Tick);
            // 
            // PrbEstudio
            // 
            this.PrbEstudio.Location = new System.Drawing.Point(412, 31);
            this.PrbEstudio.Maximum = 10;
            this.PrbEstudio.Name = "PrbEstudio";
            this.PrbEstudio.Size = new System.Drawing.Size(112, 10);
            this.PrbEstudio.TabIndex = 12;
            this.PrbEstudio.Value = 10;
            // 
            // lblEstudio
            // 
            this.lblEstudio.AutoSize = true;
            this.lblEstudio.Location = new System.Drawing.Point(432, 12);
            this.lblEstudio.Name = "lblEstudio";
            this.lblEstudio.Size = new System.Drawing.Size(42, 13);
            this.lblEstudio.TabIndex = 13;
            this.lblEstudio.Text = "Estudio";
            // 
            // btnEjercitarse
            // 
            this.btnEjercitarse.Location = new System.Drawing.Point(435, 342);
            this.btnEjercitarse.Name = "btnEjercitarse";
            this.btnEjercitarse.Size = new System.Drawing.Size(98, 27);
            this.btnEjercitarse.TabIndex = 14;
            this.btnEjercitarse.Text = "Ejercitarse";
            this.btnEjercitarse.UseVisualStyleBackColor = true;
            this.btnEjercitarse.Click += new System.EventHandler(this.btnEjercitarse_Click);
            // 
            // lblEstado
            // 
            this.lblEstado.AutoSize = true;
            this.lblEstado.Font = new System.Drawing.Font("Arial Rounded MT Bold", 9F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblEstado.Location = new System.Drawing.Point(12, 418);
            this.lblEstado.Name = "lblEstado";
            this.lblEstado.Size = new System.Drawing.Size(48, 14);
            this.lblEstado.TabIndex = 15;
            this.lblEstado.Text = "Estado";
            // 
            // lblOK
            // 
            this.lblOK.AutoSize = true;
            this.lblOK.Font = new System.Drawing.Font("Arial Rounded MT Bold", 9F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblOK.Location = new System.Drawing.Point(95, 418);
            this.lblOK.Name = "lblOK";
            this.lblOK.Size = new System.Drawing.Size(33, 14);
            this.lblOK.TabIndex = 16;
            this.lblOK.Text = "Bien";
            // 
            // btnGuardar
            // 
            this.btnGuardar.Location = new System.Drawing.Point(594, 31);
            this.btnGuardar.Name = "btnGuardar";
            this.btnGuardar.Size = new System.Drawing.Size(98, 29);
            this.btnGuardar.TabIndex = 17;
            this.btnGuardar.Text = "Guardar";
            this.btnGuardar.UseVisualStyleBackColor = true;
            this.btnGuardar.Click += new System.EventHandler(this.btnGuardar_Click);
            // 
            // Juego
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(704, 441);
            this.Controls.Add(this.btnGuardar);
            this.Controls.Add(this.lblOK);
            this.Controls.Add(this.lblEstado);
            this.Controls.Add(this.btnEjercitarse);
            this.Controls.Add(this.lblEstudio);
            this.Controls.Add(this.PrbEstudio);
            this.Controls.Add(this.BtnJugar);
            this.Controls.Add(this.btnEstudiar);
            this.Controls.Add(this.lblSalud);
            this.Controls.Add(this.PrbSalud);
            this.Controls.Add(this.lblFelicidad);
            this.Controls.Add(this.PrbDiversion);
            this.Controls.Add(this.lblHambre);
            this.Controls.Add(this.PrbHambre);
            this.Controls.Add(this.BtnDormir);
            this.Controls.Add(this.BtnAlimentar);
            this.Name = "Juego";
            this.Text = "Juego";
            this.Load += new System.EventHandler(this.Juego_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button BtnAlimentar;
        private System.Windows.Forms.Button BtnDormir;
        private System.Windows.Forms.ProgressBar PrbHambre;
        private System.Windows.Forms.Label lblHambre;
        private System.Windows.Forms.Label lblFelicidad;
        private System.Windows.Forms.ProgressBar PrbDiversion;
        private System.Windows.Forms.Label lblSalud;
        private System.Windows.Forms.ProgressBar PrbSalud;
        private System.Windows.Forms.Button BtnJugar;
        private System.Windows.Forms.Button btnEstudiar;
        public System.Windows.Forms.Timer tmrSalud;
        private System.Windows.Forms.ProgressBar PrbEstudio;
        private System.Windows.Forms.Label lblEstudio;
        private System.Windows.Forms.Button btnEjercitarse;
        private System.Windows.Forms.Label lblEstado;
        private System.Windows.Forms.Label lblOK;
        private System.Windows.Forms.Button btnGuardar;
    }
}