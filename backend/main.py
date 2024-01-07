import joblib
from flask import Flask, request, jsonify

model = joblib.load('ada_boost_model.pkl')

app = Flask(__name__)

@app.route('/predict_stroke', methods=['POST'])
def predict_stroke():
    # data = request.get_json()
    gender = int(request.form.get('gender'))
    age = float(request.form.get('age'))
    hypertension = int(request.form.get('hypertension'))
    heart_disease = int(request.form.get('heart_disease'))
    ever_married = int(request.form.get('ever_married'))
    work_type = int(request.form.get('work_type'))
    Residence_type = int(request.form.get('Residence_type'))
    avg_glucose_level = float(request.form.get('avg_glucose_level'))
    bmi = float(request.form.get('bmi'))
    smoking_status = int(request.form.get('smoking_status'))

    features = [gender, age, hypertension, heart_disease, ever_married, work_type, Residence_type, avg_glucose_level, bmi, smoking_status]
    prediction = model.predict([features])
    prediction_list = prediction.tolist() 
    return jsonify({'prediction': prediction_list})

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)
