import cv2
import os
from twilio.rest import Client
import time

##Configuracion de notificaciones
# Configuración de la API Key y Secret
account_sid = 'AC97753400266a22af24c35b2ab1925179'
auth_token = '63ddd2f406a11df408434c253ee7e141'
twilio_number = 'whatsapp:+14155238886' 

to_number = 'whatsapp:+50687842564'  

# Mensaje a enviar
message_body = 'Hola, parece que hay alguien desconocido en tu casa.'

# Crear el cliente de Twilio
client = Client(account_sid, auth_token)

ip_address = '172.17.47.233'
port = 4747

dataPathTemp = 'C:/Users/yisak/Documents/Python/Proyecto/Temp'
dataPath = 'C:/Users/yisak/Documents/Python/Proyecto/reconocimiento' 
imagePaths = os.listdir(dataPath)
print('imagePaths=',imagePaths)

image_url = 'C:/Users/yisak/Documents/Python/Proyecto/Temp/imagen.jpg' 

#Captura de imagen
video_url = f'http://{ip_address}:{port}/video'
cap = cv2.VideoCapture(video_url)

#face_recognizer = cv2.face.EigenFaceRecognizer_create()
#face_recognizer = cv2.face.FisherFaceRecognizer_create()
face_recognizer = cv2.face.LBPHFaceRecognizer_create()

# Leyendo el modelo
#face_recognizer.read('modeloEigenFace.xml')
#face_recognizer.read('modeloFisherFace.xml')
face_recognizer.read('modeloLBPHFace.xml')


faceClassif = cv2.CascadeClassifier(cv2.data.haarcascades+'haarcascade_frontalface_default.xml')

#Inicializar variables
countmsj=0
start_time = time.time()
count=0
while True:
	ret,frame = cap.read()
	if ret == False: break
	gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)
	auxFrame = gray.copy()
	frame = cv2.resize(frame, (640, frame.shape[0]))

	faces = faceClassif.detectMultiScale(gray,1.3,5)

	for (x,y,w,h) in faces:
		rostro = auxFrame[y:y+h,x:x+w]
		rostro = cv2.resize(rostro,(150,150),interpolation= cv2.INTER_CUBIC)
		result = face_recognizer.predict(rostro)

		cv2.putText(frame,'{}'.format(result),(x,y-5),1,1.3,(255,255,0),1,cv2.LINE_AA)
		# LBPHFace condicion de reconocimiento
		if result[1] < 80:
			cv2.putText(frame,'{}'.format(imagePaths[result[0]]),(x,y-25),2,1.1,(0,255,0),1,cv2.LINE_AA)
			cv2.rectangle(frame, (x,y),(x+w,y+h),(0,255,0),2)
		else:
			cv2.putText(frame,'Desconocido',(x,y-20),2,0.8,(0,0,255),1,cv2.LINE_AA)
			cv2.rectangle(frame, (x,y),(x+w,y+h),(0,0,255),2)
			if countmsj==0 :
				cv2.imwrite(dataPathTemp + '/rotro_{}.jpg'.format(count),rostro)
				count = count + 1
				message = client.messages.create(
    			body=message_body,
    			from_=twilio_number,
   		   		to=to_number)
				print(f'Mensaje de WhatsApp enviado con el ID: {message.sid}')
				countmsj+=1
		
			
	cv2.imshow('frame',frame)
	k = cv2.waitKey(1)
	if k == 27:
		break
	
	elapsed_time = time.time() - start_time
	if elapsed_time > 120:
		countmsj = 0
		start_time = time.time()
cap.release()
cv2.destroyAllWindows()